@include('admin_inc.header')
<div class="container-fluid position-relative d-flex p-0">

    <body>
        <!-- Sidebar Start -->
        @include('admin_inc.sidebar')
        <!-- Sidebar End -->

        <div class="content">
            <!-- Navbar Start -->
            @include('admin_inc.nav')
            <!-- Navbar End -->

            <!-- Table Start -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="box" style="margin:40px;">
                        <div class="bg-secondary rounded h-70 p-4">
                            <div class="bg-light rounded p-4 card-body">
                                <h4 class="card-title">Category</h4>
                                @if (Session::has('status'))
                                    <div class="alert alert-success">
                                        {{ Session::get('status') }}
                                    </div>
                                @endif

                                <form class="forms-sample" action="{{ route('storeCategory') }}" method="post">
                                    @csrf

                                    <div class="form-group pb-2">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input type="text" class="form-control" name="name"
                                            id="exampleInputUsername1" placeholder="category Name "
                                            value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{}}</div>
                                    @enderror

                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a class="btn btn-dark" href="/dashboard">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Table End -->
@include('admin_inc.footer')
</body>

</html>
