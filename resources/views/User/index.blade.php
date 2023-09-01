<!DOCTYPE html>
<html lang="en">
@include('Inc.header')

<body>
    @include('Inc.nav')

    <!-- BEGIN CONTENT -->
    <div class="hero-wrap ftco-degree-bg" id="background-div" style="background-image: url('images/slide3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-center">
                        <h1 class="mb-4">The Simplest <br>Way to Find Property</h1>
                        <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with
                            the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                        <form action="#" class="search-location mt-md-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 align-items-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="text" class="form-control" placeholder="Search location">
                                            <button><span class="ion-ios-search"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mouse">
            <a href="#" class="mouse-icon">
                <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
            </a>
        </div>
    </div>
    <!-- END CONTENT -->

   


    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Our Services</span>
                    <h2 class="mb-2">The smartest way to buy land</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-piggy-bank"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Little Downpayment</h3>
                            <p>Facilitates affordable property access with advantageous "little deposit" option.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-wallet"></span></div>
                        <div class="media-body py-md-4">
                            <h3>All Cash Offer</h3>
                            <p>Swift transaction: Purchase proposal presented entirely in cash for expedited property
                                acquisition.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-file"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Experts in Your Corner</h3>
                            <p>Trusted professionals providing expert guidance and support for your real estate journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center"><span
                                class="flaticon-locked"></span></div>
                        <div class="media-body py-md-4">
                            <h3>Lokced in Pricing</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Exclusive Offer For You</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($properties as $property)
                    <div class="col-md-4">
                        <div class="property-wrap ftco-animate">
                            <a href="#" class="img"
                                style="background-image: url('{{ asset('storage/' . $property->image) }}');"></a>

                            <div class="text">
                                <p class="price"><span class="old-price">{{ $property->price + 1000 }}</span><span
                                        class="orig-price">{{ $property->price }}<small>/mo</small></span></p>
                                <ul class="property_list">
                                    <li><span class="flaticon-bed"></span>{{ $property->no_of_br }}</li>
                                    <li><span class="flaticon-bathtub"></span>2</li>
                                    <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                                </ul>
                                <h3><a href="#">{{ $property->name }}</a></h3>
                                <span class="location">{{ $property->location }}</span>
                                <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                    <span class="ion-ios-link"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <a href="#" class="img" style="background-image: url(images/work-2.jpg);"></a>
                        <div class="text">
                            <p class="price"><span class="old-price">800,000</span><span
                                    class="orig-price">$3,050<small>/mo</small></span></p>
                            <ul class="property_list">
                                <li><span class="flaticon-bed"></span>3</li>
                                <li><span class="flaticon-bathtub"></span>2</li>
                                <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                            </ul>
                            <h3><a href="#">The Blue Sky Home</a></h3>
                            <span class="location">Oakland</span>
                            <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                <span class="ion-ios-link"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <a href="#" class="img" style="background-image: url(images/work-3.jpg);"></a>
                        <div class="text">
                            <p class="price"><span class="old-price">800,000</span><span
                                    class="orig-price">$3,050<small>/mo</small></span></p>
                            <ul class="property_list">
                                <li><span class="flaticon-bed"></span>3</li>
                                <li><span class="flaticon-bathtub"></span>2</li>
                                <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                            </ul>
                            <h3><a href="#">The Blue Sky Home</a></h3>
                            <span class="location">Oakland</span>
                            <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                <span class="ion-ios-link"></span>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg services-section img mx-md-5"
        style="background-image: url(images/slide4.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-start mb-5">
                <div class="col-md-6 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Work flow</span>
                    <h2 class="mb-3">How it works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                        <span>01</span>
                                    </div>
                                    <h3>Evaluate Property</h3>
                                    <p>Property evaluation involves appraising factors like location, size, condition,
                                        and market trends for accurate value assessment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                        <span>02</span>
                                    </div>
                                    <h3>Meet Your Agent</h3>
                                    <p>Fosters direct client-agent interaction, aiding personalized real estate
                                        assistance, clear communication, and tailored property solutions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                        <span>03</span>
                                    </div>
                                    <h3>Close the Deal</h3>
                                    <p>Involves finalizing negotiations, paperwork, and legalities, officially
                                        completing a property transaction with all parties' agreement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services services-2">
                                <div class="media-body py-md-4 text-center">
                                    <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                        <span>04</span>
                                    </div>
                                    <h3>Have Your Property</h3>
                                    <p>A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url(images/slide8.jpg);">
                </div>
                <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section p-md-5">
                        <h2 class="mb-4">We Put People First.</h2>

                        <p>Our mission revolves around prioritizing people above all else. We engage in personalized
                            interactions, comprehending each individual's distinct requirements. Transparent
                            communication is a hallmark, ensuring clients have all facts at their disposal to make
                            well-informed decisions. </p>
                        <p>People are at the heart of our real estate philosophy. We prioritize personalized service,
                            ensuring each client's unique needs are met. Transparent communication and empathetic
                            listening further underscore our commitment to making every real estate journey a positive
                            and tailored experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="355">0</strong>
                            <span>Area <br>Population</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="1090">0</strong>
                            <span>Total <br>Properties</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="209">0</strong>
                            <span>Average <br>House</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="67">0</strong>
                            <span>Total <br>Branches</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-3">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Golden Dream Estate made my home buying experience seamless.
                                        Their personal touch and attention to detail truly impressed me.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/lady.jpeg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Alice Mutheu</p>
                                            <span class="position">Investment Banker</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">As a first-time buyer, I appreciated the guidance from Golden
                                        Dream Estate. Their expertise made me confident in my investment.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/man.jpeg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Kevin Kamau</p>
                                            <span class="position">Business Proffesional</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Professionalism and warmth define Golden Dream Estate. They found
                                        my dream home and supported me throughout the process.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/lady.jpeg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Bridgit Nababe</p>
                                            <span class="position">Survey Officer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Golden Dream Estate's team exceeded my expectations. Their
                                        dedication and market knowledge ensured a smooth sale of my property.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/man.jpeg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Peter Kuria</p>
                                            <span class="position">Investment Banker</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Best Company to buy or sell with.My personal Experience with the
                                        sales team was the best. Very reliable and quality Properties</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/lady.jpeg)">
                                        </div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-agent ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Agents</span>
                    <h2 class="mb-4">Our Agents</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
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
                <div class="col-md-3 ftco-animate">
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
                <div class="col-md-3 ftco-animate">
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
                <div class="col-md-3 ftco-animate">
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
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($blogs as $blog)
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <div class="text">
                                <h3 class="heading"><a href="#">{{ $blog->title }}</a>
                                </h3>
                                <div class="meta mb-3">
                                    <div><a href="#">{{ $blog->created_at }}</a></div>
                                    <div><a href="#">{{ $blog->user->first_name }}</a></div>
                                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </div>
                                </div>
                                <a href="blog-single.html" class="block-20 img"
                                    style="background-image: url('{{ asset($blog->imagePath) }}');">
                                </a>
                                <p>{{ $blog->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <div class="meta mb-3">
                                <div><a href="#">July. 24, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <a href="blog-single.html" class="block-20 img"
                                style="background-image: url('images/image_2.jpg');">
                            </a>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <div class="meta mb-3">
                                <div><a href="#">July. 24, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <a href="blog-single.html" class="block-20 img"
                                style="background-image: url('images/image_3.jpg');">
                            </a>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <div class="meta mb-3">
                                <div><a href="#">July. 24, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <a href="blog-single.html" class="block-20 img"
                                style="background-image: url('images/image_4.jpg');">
                            </a>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    @include('Inc.footer')

</body>

</html>
