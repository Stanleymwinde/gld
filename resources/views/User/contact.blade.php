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
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Contact us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-8">
                    <div class="row mb-5">
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="icon-map-o"></span>
                            </div>
                            <p><span>Address:</span> Ruiru Town, Bidii House Third Floor, Nairobi, Kenya</p>
                        </div>
                        <div class="col-md-4 text-center border-height py-4">
                            <div class="icon">
                                <span class="icon-mobile-phone"></span>
                            </div>
                            <p><span>Phone:</span> <a href="tel:+254 718 004 455">+254 718 004 455</a></p>
                        </div>
                        <div class="col-md-4 text-center py-4">
                            <div class="icon">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <p><span>Email:</span> <a
                                    href="mailto:iinfo@goldendreamlandsltd.co.ke">info@goldendreamlandsltd.co.ke</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row block-9 justify-content-center mb-5">
                <div class="col-md-8 mb-md-5">
                    <h2 class="text-center">Need Any Help? <br>Please feel free to connect with our friendly support
                        personell. You can Choose to visit our offices through the below address, or you can contact us
                        through a phone call, a whatsapp message or send us an email.
                    </h2>
                    <form action="#" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6.4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8151631229225!2d36.73022607462707!3d-1.2848566356238402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1bf2ad590cc3%3A0x6e10223425736b5b!2sGOLDEN%20DREAMS%20CO%20LTD!5e0!3m2!1sen!2ske!4v1693545399998!5m2!1sen!2ske"
                        width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    @include('Inc.footer')

</body>

</html>
