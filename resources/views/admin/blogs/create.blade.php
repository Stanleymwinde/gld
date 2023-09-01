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
            <div class="container-scroller">
                <!-- partial:partials/_sidebar.html -->
                {{-- @include('admin.pages.sidebar') --}}
                <!-- partial -->
                <div class="container-fluid page-body-wrapper">
                    <!-- partial:partials/_navbar.html -->
                    {{-- @include('admin.pages.navbar') --}}
                    <!-- partial -->
                    <div class="main-panel">
                        <div class="content-wrapper">




                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <form class="container" action="{{ route('storeBlogs') }}" method="post"
                                        enctype="multipart/form-data">

                                        @csrf

                                        @if (Session::has('status'))
                                            <div class="alert alert-success">
                                                {{ Session::get('status') }}
                                            </div>
                                        @endif
                                        <div class="card-body">
                                            <h4 class="card-title">Create A post </h4>

                                            <form class="forms-sample">
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        id="exampleInputName1" placeholder="Name"
                                                        value="{{ old('title') }}" />
                                                </div>
                                                @error('title')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                <div class="form-group">
                                                    <label for="exampleInputName1">Description</label>
                                                    <textarea class="form-control" name="description" id="exampleTextarea1" rows="4" value="{{ old('description') }}"></textarea>
                                                </div>
                                                @error('description')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror



                                                <div class="form-group">
                                                    <label for="exampleSelectGender">Category</label>
                                                    <select class="form-control" name="category_id"
                                                        id="exampleSelectGender">
                                                        <option selected disabled>Select option </option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('category_id')
                                                    {{-- The $attributeValue field is/must be $validationRule --}}
                                                    <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                                                @enderror

                                                <div class="form-group">
                                                    <label>File upload</label>

                                                    <div class="input-group col-xs-12">
                                                        <input type="file" class="form-control file-upload-info"
                                                            name="image" id="exampleFormControlFile1"
                                                            value="{{ old('image') }}">

                                                    </div>


                                                </div>
                                                @error('image')
                                                    <div class="alert alert-danger">{{ $message }}
                                                    </div>
                                                @enderror

                                                <div class="form-group">
                                                    <label for="exampleTextarea1">Write Your Content Here</label>
                                                    <textarea class="form-control" name="body" id="exampleTextarea1" rows="4" value="{{ old('body') }}"></textarea>
                                                </div>
                                                @error('body')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <br>
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                <a class="btn btn-dark" href="/dashboard">Cancel</a>
                                            </form>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <script>
                                CKEDITOR.replace('body');
                            </script>
                            <script>
                                CKEDITOR.replace('description');
                            </script>

                        </div>
                        
                        @include('admin_inc.footer')
                    </div>
                </div>
    </body>

    </html>
