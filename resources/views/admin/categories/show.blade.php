@include('admin_inc.header')

<div class="container-fluid position-relative d-flex p-0">

    <body>
        <div class="content">
            <!-- Sidebar Start -->
            @include('admin_inc.sidebar')
            <!-- Sidebar End -->

            <div class="container-fluid page-body-wrapper">
                <!-- Navbar Start -->
                @include('admin_inc.nav')
                <!-- Navbar End -->


                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-dark">Categories</h4>

                        </p>
                        <div class="table-responsive">

                            <table class="table">

                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Created</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>

                                            <td>{{ $category->created_at->diffForHumans() }}</td>
                                            <td class="d-flex">

                                                <button type="button" class="btn btn-secondary ">
                                                    <a href="{{ route('editCategory', $category) }}">Edit</>
                                                </button>
                                                <form action="{{ route('deleteCategory', $category) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

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
