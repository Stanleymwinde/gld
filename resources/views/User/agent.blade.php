<!DOCTYPE html>
<html lang="en">
@include('Inc.header')

<body>
      <!-- Top Bar -->
        @include('Inc.topbar') <!-- Include the top bar content here -->

    @include('Inc.nav')
    <!-- END nav -->
<div class="hero-wrap ftco-degree-bg" id="background-div" style="background-image: url('images/slide3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Agent <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Agent</h1>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section ftco-agent">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="position">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-5.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-6.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-7.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="location">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-8.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">James Stallon</a></h3>
                            <p class="h-info"><span class="position">Listing</span> <span class="details">&mdash; 10
                                    Properties</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @include('Inc.footer')

</body>

</html>
