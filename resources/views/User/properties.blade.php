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
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Properties <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Choose <br>Your Desired Home</h1>
                </div>
            </div>
        </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    @foreach ($properties as $property)
                        <div class="col-md-4">
                            <div class="property-wrap ftco-animate">
                                <a href="properties-single.html" class="img"
                                    style="background-image: url('{{ asset('storage/' . $property->image) }}');"></a>
                                <div class="text">
                                    <p class="price"><span class="old-price">{{ $property->price + 1000 }}</span><span
                                            class="orig-price">{{ $property->price }}<small>/mo</small></span></p>
                                    <ul class="property_list">
                                        <li><span class="flaticon-bed"></span>{{ $property->no_of_br }}</li>
                                        <li><span class="flaticon-bathtub"></span>2</li>
                                        <li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
                                    </ul>
                                    <h3><a
                                            href="{{ route('properties-single', ['propertyId' => $property->id]) }}">{{ $property->name }}</a>
                                    </h3>

                                    <span class="location">{{ $property->location }}</span>
                                    <a href="properties-single.html"
                                        class="d-flex align-items-center justify-content-center btn-custom">
                                        <span class="ion-ios-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27 text-center">
                            <ul class="pagination">
                                <!-- Previous Page Link -->
                                @if ($properties->currentPage() > 1)
                                    <li><a href="{{ $properties->previousPageUrl() }}">&lt;</a></li>
                                @endif

                                <!-- Pagination Elements -->
                                @for ($i = 1; $i <= $properties->lastPage(); $i++)
                                    <li class="{{ $i === $properties->currentPage() ? 'active' : '' }}">
                                        <a href="{{ $properties->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                <!-- Next Page Link -->
                                @if ($properties->currentPage() < $properties->lastPage())
                                    <li><a href="{{ $properties->nextPageUrl() }}">&gt;</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('Inc.footer')
</body>

</html>
