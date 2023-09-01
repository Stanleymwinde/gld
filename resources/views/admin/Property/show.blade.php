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
                                    <h4 class="card-title text-dark">Product Status</h4>
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
                                                    <th> Property Image </th>
                                                    <th> Property Name </th>
                                                    <th>Category </th>
                                                    <th>Property Description</th>
                                                    <th>Property Location</th>
                                                    <th>No. of Br</th>
                                                    <th>status</th>
                                                    <th> Time Published</th>
                                                    <th> Published By </th>
                                                    {{-- <th> Project </th>
                            <th> Payment Mode </th>
                            <th> Start Date </th>
                            <th> Payment Status </th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($properties as $property)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-muted m-0">
                                                                <label class="form-check-label">

                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="{{ asset('storage/' . $property->image) }}"
                                                                alt="image"
                                                                style="width: 40px; height: 40px; border-radius: 2px;" />
                                                        </td>
                                                        <td> <a href="{{ route('showProperty', $property) }}">
                                                                {{ $property->name }} </a></td>
                                                        <td> {{ $property->category->name }} </td>
                                                        <td style="width: 200px;"> {{ $property->description }} </td>
                                                        <td>{{ $property->location }}</td>
                                                        <td>{{ $property->no_of_br }}</td>
                                                        <td>{{ $property->status }}</td>
                                                        <td> {{ $property->created_at->diffForHumans() }} </td>
                                                        <td> {{ $property->user->first_name }} </td>
                                                        {{-- <td> Dashboard </td>
                            <td> Credit card </td>
                            <td> 04 Dec 2019 </td> --}}
                                                        <td class="d-flex">
                                                            <button type="button" class="btn btn-secondary ">
                                                                <a href="{{ route('editProperty', $property) }}">Edit
                                                                    </></button>
                                                            <form action="{{ route('deleteProperty', $property) }}"
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
                                    <li class="page-item {{ $properties->onFirstPage() ? 'disabled' : '' }}">
                                        <a href="{{ $properties->previousPageUrl() }}" class="page-link"
                                            aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>

                                    @foreach ($properties->getUrlRange(1, $properties->lastPage()) as $page => $url)
                                        <li
                                            class="page-item {{ $properties->currentPage() === $page ? 'active' : '' }}">
                                            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    <li class="page-item {{ $properties->hasMorePages() ? '' : 'disabled' }}">
                                        <a href="{{ $properties->nextPageUrl() }}" class="page-link" aria-label="Next">
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
