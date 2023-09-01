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

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">

                                <form class="container" action="{{ route('updateBlogs', $blog->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    @if (Session::has('status'))
                                        <div class="alert alert-success">
                                            {{ Session::get('status') }}
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <h4 class="card-title">Update this blog with title {{ $blog->title }} </h4>

                                        <form class="forms-sample">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    id="exampleInputName1" placeholder="Name"
                                                    value="{{ $blog->title }}" />
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
                                                        value="{{ $blog->image }}">

                                                </div>


                                            </div>
                                            @error('image')
                                                <div class="alert alert-danger">{{ $message }}
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                <label for="exampleTextarea1">Textarea</label>
                                                <textarea class="form-control" name="body" id="exampleTextarea1" rows="4" value="{!! $blog->body !!}"></textarea>
                                            </div>
                                            @error('body')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <br>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <a class="btn btn-dark" href="{{ route('admin') }}">Cancel</a>
                                        </form>
                                    </div>
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
