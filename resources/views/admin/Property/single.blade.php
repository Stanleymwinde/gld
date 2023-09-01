@include('admin_inc.header')

<body>
    <div class="container-scroller">
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
                            <h4 class="card-title">Title of {{ $blog->title }}</h4>

                            <div class="d-flex py-4">
                                <div class="preview-list w-100">
                                    <div class="preview-item p-0">
                                        <div class="preview-thumbnail">
                                            <img src="/assets/images/faces/face12.jpg" class="rounded-circle"
                                                alt="">
                                        </div>
                                        <div class="preview-item-content d-flex flex-grow">
                                            <div class="flex-grow">
                                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                    <h6 class="preview-subject">Writen by :
                                                        {{ $blog->user->first_name }}</h6>
                                                    <p class="text-muted text-small">
                                                        {{ $blog->created_at->diffForHumans() }} </p>
                                                </div>
                                                <p class="text-muted"> Category {{ $blog->category->name }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" owl-theme full-width">
                                <div class="item">
                                    <img src="{{ asset($blog->imagePath) }}" alt="image"
                                        style="width:auto; height:500px" />
                                </div>
                            </div>

                            <p class="text-muted">{!! $blog->body !!} </p>

                        </div>

                    </div>

                </div>



            </div>

            <!-- plugins:js -->
            <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="/assets/vendors/chart.js/Chart.min.js"></script>
            <script src="/assets/vendors/progressbar.js/progressbar.min.js"></script>
            <script src="/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
            <script src="/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
            <script src="/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="/assets/js/off-canvas.js"></script>
            <script src="/assets/js/hoverable-collapse.js"></script>
            <script src="/assets/js/misc.js"></script>
            <script src="/assets/js/settings.js"></script>
            <script src="/assets/js/todolist.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <script src="/assets/js/dashboard.js"></script>
            <!-- End custom js for this page -->
</body>

</html>
