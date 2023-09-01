<!DOCTYPE html>
<html lang="en">
@include('Inc.header')

<body>

    @include('Inc.nav')
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight"id="background-div"
        style="background-image: url('images/slide3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href="/blog">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Single Blog
                            <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Our Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-md-last ftco-animate">

                    <h2 class="mb-3">{{ $blog->title }}</h2>
                    <p>{{ $blog->created_at }}</p>
                    <p>
                        <img src="{{ asset($blog->imagePath) }}" alt="" class="img-fluid">
                    </p>
                    <p>{{ $blog->description }}.</p>
                    </p>

                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">Life</a>
                            <a href="#" class="tag-cloud-link">Sport</a>
                            <a href="#" class="tag-cloud-link">Tech</a>
                            <a href="#" class="tag-cloud-link">Travel</a>
                        </div>
                    </div>

                    <div class="about-author d-flex p-4 bg-light">
                        <div class="bio mr-5">
                            <img src="/images/man.jpeg" alt="Image placeholder" class="img-fluid mb-4"
                                style="height: 70px; width:110px">
                        </div>
                        <div class="desc">
                            <h3>{{ $blog->user->first_name }}</h3>
                            <p>We have properties both for sale and to let. explore our listed properties and click on
                                it so as to view full information about the property including price, space, location an
                                other basic & social amenities</p>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->

                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            @foreach ($categories as $category)
                                <li><a href="#">{{ $category->name }} <span>2</span></a></li>
                            @endforeach

                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        @foreach ($recentBlogs as $blog)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4"
                                    style="background-image: url('{{ asset($blog->imagePath) }}');"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{ route('blog-single', ['blogId' => $blog->id]) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="#"><span
                                                    class="icon-calendar"></span>{{ $blog->created_at }}</a></div>
                                        <div><a href="#"><span
                                                    class="icon-person"></span>{{ $blog->user->name }}</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 1</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <div class="sidebar-box ftco-animate">
                        <h3>Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">dish</a>
                            <a href="#" class="tag-cloud-link">menu</a>
                            <a href="#" class="tag-cloud-link">food</a>
                            <a href="#" class="tag-cloud-link">sweet</a>
                            <a href="#" class="tag-cloud-link">tasty</a>
                            <a href="#" class="tag-cloud-link">delicious</a>
                            <a href="#" class="tag-cloud-link">desserts</a>
                            <a href="#" class="tag-cloud-link">drinks</a>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Something about Us</h3>
                        <p>Here we get you a serene enviromentto build your retirement homes, as well as Business
                            Properties. We have all types of properties to suite your all needs. Our Title dees are
                            always ready upon complete payment.</p>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->

    @include('Inc.footer')

</body>

</html>
