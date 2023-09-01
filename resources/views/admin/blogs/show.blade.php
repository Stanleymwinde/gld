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

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-11 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-dark">Blog Status</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">

                                                            </label>
                                                        </div>
                                                    </th>
                                                    <th> Blog Image </th>
                                                    <th> Blog Title </th>
                                                    <th>Category </th>
                                                    <th> Time Published</th>
                                                    <th> Published By </th>
                                                    {{-- <th> Project </th>
                            <th> Payment Mode </th>
                            <th> Start Date </th>
                            <th> Payment Status </th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($blogs as $blog)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-muted m-0">
                                                                <label class="form-check-label">

                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset($blog->imagePath) }}" alt="image"
                                                                style="width: 40px; height:40px; border-radius:2px;" />

                                                        </td>
                                                        <td> <a href="{{ route('showBlogs', $blog) }}">
                                                                {{ $blog->title }} </a></td>
                                                        <td> {{ $blog->category->name }} </td>
                                                        <td> {{ $blog->created_at->diffForHumans() }} </td>
                                                        <td> {{ $blog->user->first_name }} </td>
                                                        {{-- <td> Dashboard </td>
                            <td> Credit card </td>
                            <td> 04 Dec 2019 </td> --}}
                                                        <td class="d-flex">
                                                            <button type="button" class="btn btn-secondary ">
                                                                <a href="{{ route('editBlogs', $blog) }}">Edit
                                                                    </></button>
                                                            <form action="{{ route('deleteBlogs', $blog) }}"
                                                                method="blog">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item {{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                                        <a href="{{ $blogs->previousPageUrl() }}" class="page-link"
                                            aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>

                                    @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                        <li class="page-item {{ $blogs->currentPage() === $page ? 'active' : '' }}">
                                            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    <li class="page-item {{ $blogs->hasMorePages() ? '' : 'disabled' }}">
                                        <a href="{{ $blogs->nextPageUrl() }}" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
