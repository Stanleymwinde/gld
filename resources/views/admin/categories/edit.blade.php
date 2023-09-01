@include('admin_inc.header')

<div class="container-fluid position-relative d-flex p-0">

    <body>
        <div class="content">
            <!-- partial:partials/_sidebar.html -->
            @include('admin_inc.sidebar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.html -->
                @include('admin_inc.nav')
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Category </h4>
                                @if (Session::has('status'))
                                    <div class="alert alert-success">
                                        {{ Session::get('status') }}
                                    </div>
                                @endif

                                <form class="forms-sample" action="{{ route('updateCategory', $category->id) }}"
                                    method="post">
                                    @method('PUT')
                                    @csrf

                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input type="text" class="form-control" name="name"
                                            id="exampleInputUsername1" placeholder="category Name "
                                            value="{{ $category->name }}">
                                    </div>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <br>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a class="btn btn-dark" href="/dashboard">Cancel</a>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Table End -->
                @include('admin_inc.footer')
    </body>

    </html>
