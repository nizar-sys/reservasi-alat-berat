@extends('layouts.frontend')

@section('title', 'Home')

@section('content')
    <!-- hero section start  -->
    <section id="hero" class=" position-relative overflow-hidden">
        <div class="pattern-overlay pattern-right position-absolute">
            <img src="{{ asset('fe_assets') }}/images/hero-pattern-right.png" alt="pattern">
        </div>
        <div class="pattern-overlay pattern-left position-absolute">
            <img src="{{ asset('fe_assets') }}/images/hero-pattern-left.png" alt="pattern">
        </div>
        <div class="hero-content container text-center">
            <div class="row">
                <div class="detail mb-4">
                    <h1 class="">Find your <span class="text-primary"> rental car </span> </h1>
                    <p class="hero-paragraph">We have many best rental car collections.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- search section start  -->
    <section id="search">
        <div class="container search-block p-5">

            <form class="row">
                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <label for="vehicle" class="label-style text-capitalize form-label">Vehicle type</label>
                    <div class="input-group date ">
                        <!-- <input type="text" class="form-control p-3 " id="vehicle" placeholder="Select Car Group" /> -->
                        <select class="form-select form-control p-3" id="vehicle" aria-label="Default select example"
                            style="background-image: none;">
                            <option selected>Select Vehicle Type</option>
                            <option value="1">BMW x3</option>
                            <option value="2">BMW M2</option>
                            <option value="3">Ford explorer</option>
                            <option value="4">Ferrari</option>
                            <option value="5">Mercedes-Benz</option>
                            <option value="6">Sports car</option>
                            <option value="7">Tesla</option>
                        </select>
                        <span class="search-icon-position position-absolute p-3 ">
                            <iconify-icon class="search-icons" icon="solar:bus-outline"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <label for="location" class="label-style text-capitalize form-label">Picking up location</label>
                    <div class="input-group date">
                        <input type="text" class="form-control p-3 position-relative" id="location"
                            placeholder="Airport or anywhere" />
                        <span class="search-icon-position position-absolute p-3 ">
                            <iconify-icon class="search-icons" icon="solar:map-arrow-square-outline"></iconify-icon>
                        </span>


                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <label for="pick-up-date" class="label-style text-capitalize form-label">Picking up date</label>
                    <div class="input-group date" id="datepicker1">
                        <input type="text" class="form-control p-3" id="pick-up-date" />

                        <span class="input-group-append">
                            <span class="search-icon-position position-absolute p-3">
                                <iconify-icon class="search-icons" icon="solar:calendar-broken"></iconify-icon>
                            </span>
                        </span>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
                    <label for="return-date" class="label-style text-capitalize form-label">Returning date</label>
                    <div class="input-group date" id="datepicker2">
                        <input type="text" class="form-control p-3" id="return-date" />

                        <span class="input-group-append">
                            <span class="search-icon-position position-absolute p-3">
                                <iconify-icon class="search-icons" icon="solar:calendar-broken"></iconify-icon>
                            </span>
                        </span>

                    </div>
                </div>
            </form>

            <div class="d-grid gap-2 mt-4">
                <button class="btn btn-primary " type="button">Find your car</button>
            </div>
        </div>

    </section>

    <!-- process section start  -->
    <section id="process">
        <div class=" process-content container">
            <h2 class=" text-center my-5 pb-5">Our renting <span class="text-primary"> process </span> </h2>
            <hr class="progress-line">
            <div class="row process-block">
                <div class="col-6 col-lg-3 text-start my-4">
                    <div class="bullet"></div>
                    <h5 class="text-uppercase mt-5"> Choose a vehicle </h5>
                    <p>Sed euismod mauris corper libero.</p>
                </div>

                <div class="col-6 col-lg-3 text-start my-4">
                    <div class="bullet"></div>
                    <h5 class="text-uppercase mt-5"> Pick location & date </h5>
                    <p>Nisi maecenas fermentum neque.</p>
                </div>

                <div class="col-6 col-lg-3 text-start my-4">
                    <div class="bullet"></div>
                    <h5 class="text-uppercase mt-5"> Book your car </h5>
                    <p>Mauris corper accumsan urna sed.</p>
                </div>

                <div class="col-6 col-lg-3 text-start my-4">
                    <div class="bullet"></div>
                    <h5 class="text-uppercase mt-5"> Finish process </h5>
                    <p>Orci duis ut lectus metus nam sette.</p>
                </div>

            </div>


        </div>
    </section>

    <!-- rental section start  -->
    <section id="rental" class="position-relative">
        <div class="container my-5 py-5">
            <h2 class=" text-center my-5">cars for <span class="text-primary"> rental </span> </h2>

            <div class="swiper-button-next rental-swiper-next  rental-arrow position-absolute"></div>
            <div class="swiper-button-prev rental-swiper-prev rental-arrow position-absolute"></div>

            <div class="swiper rental-swiper mb-5">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/car1.png"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body p-4">
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                    <h4 class="card-title">BMW x3</h4>
                                </a>
                                <div class="card-text ">
                                    <ul class="d-flex list-unstyled">
                                        <li class="rental-list">
                                            Sports
                                        </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> Auto</li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> 4 Passengers </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list display-small"> Diesel </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h3 class="pt-2">$369 <span class="rental-price">/day</span></h3>
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/car2.png"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body p-4">
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                    <h4 class="card-title">BMW M2</h4>
                                </a>
                                <div class="card-text ">
                                    <ul class="d-flex list-unstyled">
                                        <li class="rental-list">
                                            Sports
                                        </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> Auto</li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> 4 Passengers </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list display-small"> Diesel </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h3 class="pt-2">$369 <span class="rental-price">/day</span></h3>
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/car3.png"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body p-4">
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                    <h4 class="card-title">Ford explorer</h4>
                                </a>
                                <div class="card-text ">
                                    <ul class="d-flex list-unstyled">
                                        <li class="rental-list">
                                            Sports
                                        </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> Auto</li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> 4 Passengers </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list display-small"> Diesel </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h3 class="pt-2">$369 <span class="rental-price">/day</span></h3>
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/car1.png"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body p-4">
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                    <h4 class="card-title">BMW x3</h4>
                                </a>
                                <div class="card-text ">
                                    <ul class="d-flex list-unstyled">
                                        <li class="rental-list">
                                            Sports
                                        </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> Auto</li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> 4 Passengers </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list display-small"> Diesel </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h3 class="pt-2">$369 <span class="rental-price">/day</span></h3>
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/car2.png"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body p-4">
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                    <h4 class="card-title">BMW M2</h4>
                                </a>
                                <div class="card-text ">
                                    <ul class="d-flex list-unstyled">
                                        <li class="rental-list">
                                            Sports
                                        </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> Auto</li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> 4 Passengers </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list display-small"> Diesel </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h3 class="pt-2">$369 <span class="rental-price">/day</span></h3>
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/car3.png"
                                    class="card-img-top" alt="..."></a>
                            <div class="card-body p-4">
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                    <h4 class="card-title">Ford explorer</h4>
                                </a>
                                <div class="card-text ">
                                    <ul class="d-flex list-unstyled">
                                        <li class="rental-list">
                                            Sports
                                        </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> Auto</li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list"> 4 Passengers </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list display-small"> Diesel </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h3 class="pt-2">$369 <span class="rental-price">/day</span></h3>
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>



    </section>

    <!-- testimonial section start  -->
    <section id="testimonial" class=" position-relative">
        <div class="pattern-overlay pattern-left position-absolute">
            <img src="{{ asset('fe_assets') }}/images/testimonial-pattern.png" alt="pattern">
        </div>
        <div class="container my-5 py-5">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide text-center">
                        <div class="offset-2 col-8">
                            <iconify-icon icon="mdi:format-quote-open" class="testimonial-icon"></iconify-icon>
                            <p class="testimonial-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.The more content you provide about you. Quos saepe suscipit, nemo dolore sapiente!
                            </p>
                            <h5>James Rodrigo</h5>
                        </div>
                    </div>
                    <div class="swiper-slide text-center">
                        <div class="offset-2 col-8">
                            <iconify-icon icon="mdi:format-quote-open" class="testimonial-icon"></iconify-icon>
                            <p class="testimonial-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.The more content you provide about you. Quos saepe suscipit, nemo dolore sapiente!
                            </p>
                            <h5>James Rodrigo</h5>
                        </div>
                    </div>
                    <div class="swiper-slide text-center">
                        <div class="offset-2 col-8">
                            <iconify-icon icon="mdi:format-quote-open" class="testimonial-icon"></iconify-icon>
                            <p class="testimonial-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.The more content you provide about you. Quos saepe suscipit, nemo dolore sapiente!
                            </p>
                            <h5>James Rodrigo</h5>
                        </div>
                    </div>
                    <div class="swiper-slide text-center">
                        <div class="offset-2 col-8">
                            <iconify-icon icon="mdi:format-quote-open" class="testimonial-icon"></iconify-icon>
                            <p class="testimonial-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.The more content you provide about you. Quos saepe suscipit, nemo dolore sapiente!
                            </p>
                            <h5>James Rodrigo</h5>
                        </div>
                    </div>



                </div>
                <div class="swiper-pagination position-unset mt-4"></div>
            </div>
        </div>



    </section>

    <!-- pricing section start  -->
    <section id="pricing">
        <div class=" container  py-5 my-5">
            <h2 class=" text-center my-5">See our <span class="text-primary">pricing plan</span> </h2>

            <div class="d-flex justify-content-center">
                <label class="pt-2" id="monthly-label">Monthly</label>
                <span class="form-check form-switch p-0">
                    <input class="form-check-input mx-2" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                        checked>
                    <label class="pt-2" id="yearly-label" for="flexSwitchCheckChecked">Yearly</label>
                </span>
            </div>


            <div class="row py-4">
                <div class="  col-lg-3 col-sm-6 col-12 pb-4">
                    <div class=" pricing-lable pt-5 ">
                        <div class="pt-3 ps-2">
                            <h3>Save by choosing our best plan</h3>
                            <p>Choose our best plan to save a lot.</p>
                        </div>

                        <iconify-icon class="pricing-lable-icon "
                            icon="fluent:vehicle-car-profile-ltr-20-regular"></iconify-icon>


                    </div>
                </div>

                <div class=" col-lg-3 col-sm-6 col-12 pb-4">
                    <div class=" pricing-detail py-5  text-center">
                        <div class="pricing-content">
                            <h5>Essential</h5>

                            <div class="content monthly pt-2">
                                <h3>$29.50</h3>
                            </div>
                            <div class="content yearly pt-2">
                                <h3>$350.70</h3>
                            </div>

                            <div class="pt-4">
                                <p>✓ Quisque rhoncus</p>
                                <p>✓ Lorem ipsum dolor</p>
                                <p>✓ Vivamus velit mir</p>
                                <p>✓ Velit mir</p>
                                <p>✓ Elit mir ivamus</p>
                            </div>

                        </div>

                        <div class="pricing-button">
                            <button class="btn btn-primary">Choose Plan </button>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-sm-6 col-12 pb-4">
                    <div class=" pricing-detail py-5  text-center">
                        <div class="pricing-content">
                            <h5 class="price-recommend">Recommended</h5>
                            <div class="content monthly pt-2">
                                <h3>$44.40</h3>
                            </div>
                            <div class="content yearly pt-2">
                                <h3>$530.60</h3>
                            </div>

                            <div class="pt-4">
                                <p>✓ Quisque rhoncus</p>
                                <p>✓ Lorem ipsum dolor</p>
                                <p>✓ Vivamus velit mir</p>
                                <p>✓ Elit mir ivamus</p>
                                <p>✓ Lorem ipsum dolor</p>
                                <p>✓ Ipsum dolor</p>
                            </div>

                        </div>

                        <div class="pricing-button">
                            <button class="btn btn-primary active">Choose Plan </button>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-sm-6 col-12 pb-4">
                    <div class=" pricing-detail py-5  text-center">
                        <div class="pricing-content">
                            <h5>Pro</h5>
                            <div class="content monthly pt-2">
                                <h3>$70.50</h3>
                            </div>
                            <div class="content yearly pt-2">
                                <h3>$840.30</h3>
                            </div>

                            <div class="pt-4">
                                <p>✓ Quisque rhoncus</p>
                                <p>✓ Lorem ipsum dolor</p>
                                <p>✓ Vivamus velit mir</p>
                                <p>✓ Elit mir ivamus</p>
                                <p>✓ Ivamus mir vamus</p>
                                <p>✓ Quisque rhoncusr</p>
                                <p>✓ lit mir iamus</p>
                            </div>

                        </div>

                        <div class="pricing-button">
                            <button class="btn btn-primary">Choose Plan </button>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </section>

    <!-- services section start  -->
    <section id="services">

        <div class="container  py-5 my-5">
            <div class="row py-5 ">
                <div class=" pb-5  col-10 col-sm-8 col-lg-6">
                    <h2 class="">See <span class="text-primary">best services</span> for your solution </h2>
                </div>
                <div class=" pb-5  col-lg-6">
                    <p class="pt-4">Vitae aliquam vestibulum elit adipiscing massa diam in dignissim. Risus tellus
                        libero elementum aliquam etiam. Lectus adipiscing est auctor mi quisque nunc non vive adipiscing
                        massa diam in digniss imrra est. </p>
                </div>
            </div>

        </div>

    </section>

    <section id="service-2">
        <div class=" services-sub container mb-5 pb-5">
            <div class="row">
                <div class=" mt-4 col-6 col-lg-3">
                    <div class="services-components text-center pt-4 pb-3">
                        <iconify-icon class="services-icon my-2" icon="solar:shield-check-outline"></iconify-icon>
                        <h5>Secured Payment</h5>
                        <p>Aliquam etiam lectus adipiscing est auctor mi quisque non.</p>
                    </div>
                </div>
                <div class=" mt-4 col-6 col-lg-3">
                    <div class="services-components text-center pt-4 pb-3">
                        <iconify-icon class="services-icon my-2" icon="solar:bookmark-opened-outline"></iconify-icon>
                        <h5>any class vehicle</h5>
                        <p>Aliquam etiam lectus adipiscing est auctor mi quisque non.</p>
                    </div>
                </div>
                <div class=" mt-4 col-6 col-lg-3">
                    <div class="services-components text-center pt-4 pb-3">
                        <iconify-icon class="services-icon my-2" icon="solar:user-circle-outline"></iconify-icon>
                        <h5>Car sharing options</h5>
                        <p>Aliquam etiam lectus adipiscing est auctor mi quisque non.</p>
                    </div>
                </div>
                <div class=" mt-4 col-6 col-lg-3">
                    <div class="services-components text-center pt-4 pb-3">
                        <iconify-icon class="services-icon my-2" icon="solar:call-chat-outline"></iconify-icon>
                        <h5>Help center & Support</h5>
                        <p>Aliquam etiam lectus adipiscing est auctor mi quisque non.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- faq section start  -->
    <section id="faq">

        <div class="container my-5 py-5 ">
            <h2 class=" text-center my-5">We’ve got <span class="text-primary"> answers</span> </h2>


            <div class="accordion col-md-8 offset-md-2" id="accordionPanelsStayOpenExample">

                <div class="accordion-item mt-3">
                    <h5 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Why to believe with GoCar Car rental service ?
                        </button>
                    </h5>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p>Diam orci gravida convallis at enim risus viverra. Hac mi tristique in aliquet tincidunt
                                nam lectus nec. Placerat interdum auctor facilisi massa laoreet hendrerit posuere a.
                                Tristique ultricies consectetu at.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="accordion-item mt-3">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            How to know which renting price price is best?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>Diam orci gravida convallis at enim risus viverra. Hac mi tristique in aliquet tincidunt
                                nam lectus
                                nec. Placerat interdum auctor facilisi massa laoreet hendrerit posuere a. Tristique
                                ultricies consectetu
                                at.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="accordion-item mt-3">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            What are the special features of gocar?
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>Diam orci gravida convallis at enim risus viverra. Hac mi tristique in aliquet tincidunt
                                nam lectus
                                nec. Placerat interdum auctor facilisi massa laoreet hendrerit posuere a. Tristique
                                ultricies consectetu
                                at.</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

        </div>
    </section>

    <!-- blog section start  -->
    <section id="blog">

        <div class="container  py-5 my-5">
            <div class="row py-5 ">
                <div class="  pt-3 col-10 col-sm-8 col-lg-5">
                    <h2 class="">Our <span class="text-primary">Recent Posts</span> </h2>
                    <a href="blog.html" class="btn btn-primary mt-4">Read Blogs </a>


                </div>
                <div class=" mt-5 mt-lg-0 col-lg-7">
                    <div class=" pt-3 d-flex">
                        <div class="">
                            <h3>Jan 2 <br> 2023</h3>
                        </div>
                        <div class="ms-5">
                            <p>Tips</p>
                            <a href="single-post.html" class="blog-title">Safest car rental services in 2023</a>
                        </div>
                    </div>
                    <hr>
                    <div class=" pt-3 d-flex">
                        <div class="">
                            <h3>Jan 5<br> 2023</h3>
                        </div>
                        <div class="ms-5">
                            <p>Rental</p>
                            <a href="single-post.html" class="blog-title">Best car collection in the world</a>
                        </div>
                    </div>
                    <hr>
                    <div class=" pt-3 d-flex">
                        <div class="">
                            <h3>Jan 8 <br> 2023</h3>
                        </div>
                        <div class="ms-5">
                            <p>Tricks</p>
                            <a href="single-post.html" class="blog-title">Which car is the best for travel</a>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>

        </div>

    </section>
@endsection
