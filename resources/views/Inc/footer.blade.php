<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Golden Dreams Ltd</h2>
                    <p>Golden Dream Estate stands out with exceptional client care, expert guidance, and a commitment to
                        transforming property transactions into pleasant experiences.</p>
                    <ul class="ftco-footer-social list-unstyled mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 md-4">
                    <h2 class="ftco-heading-2">Community</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Search
                                Properties</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>For Agents</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Reviews</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Company</h2>
                    <ul class="list-unstyled">
                        <li><a href="/about"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Press</a></li>
                        <li><a href="/contact"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="fb-page" data-href="https://web.facebook.com/goldendreamltd/?_rdc=1&amp;_rdr"
                data-tabs="timeline" data-width="" data-height="" data-small-header="false"
                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://web.facebook.com/goldendreamltd/?_rdc=1&amp;_rdr"
                    class="fb-xfbml-parse-ignore"><a
                        href="https://web.facebook.com/goldendreamltd/?_rdc=1&amp;_rdr">Golden Dreams Land And
                        Properties Limited</a></blockquote>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Ruiru Town, Bidii House
                                    Third Floor, Nairobi, Kenya</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span
                                        class="tel:+254 718 004 455">+254 718 004 455</span></a></li>
                            <li><a href="mailto:info@goldendreamlandsltd.co.ke"><span
                                        class="icon icon-envelope pr-4"></span><span
                                        class="text">info@goldendreamlandsltd.co.ke</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This site is made with <i
                        class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://qualitybrands.co.ke"
                        target="_blank">GoldenICT</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0"
    nonce="EAPyzs6N"></script>

<script>
    const backgroundDiv = document.getElementById('background-div');
    const images = ['{{ asset('images/slide1.jpg') }}', '{{ asset('images/slide3.jpg') }}',
        '{{ asset('images/slide4.jpg') }}'
    ];
    let currentIndex = 0;

    function changeBackgroundImage() {
        backgroundDiv.style.transition = 'background-image 2s ease'; // Adjust the duration (2s for a slower transition)
        backgroundDiv.style.backgroundImage = `url('${images[currentIndex]}')`;
        currentIndex = (currentIndex + 1) % images.length;
        setTimeout(() => {
            backgroundDiv.style.transition = ''; // Remove the transition after it's done
        }, 2000); // Adjust the duration (2s for a slower transition)
    }

    setInterval(changeBackgroundImage, 5000);
    changeBackgroundImage();
</script>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/jquery.animateNumber.min.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/jquery.timepicker.min.js"></script>
<script src="/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/js/google-map.js"></script>
<script src="/js/main.js"></script>
