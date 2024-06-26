@extends('layouts.frontend')

@section('title', 'Heavy Equipments Detail')

@section('content')
    <!-- hero section start  -->
    <section id="hero" class="position-relative overflow-hidden">
        <div class="container py-5 mt-5">
            <div class="row my-5">
                <h2 class="mt-5">Excavator - Kobelco
                    Kobelco SK200</h2>

                <div class="d-flex">
                    <p class="fs-5">Lectus adipiscing est auctor</p>
                    <p style="color: #94ca21">&nbsp; | &nbsp;</p>
                    <p class="fs-5 fw-semibold">For Rent</p>
                    <p style="color: #94ca21">&nbsp; | &nbsp;</p>
                    <p class="fs-5 fw-semibold">Price : $9000 / day</p>
                </div>
            </div>
        </div>
    </section>

    <div class="post-wrap no-padding-bottom">
        <div class="container">
            <div class="row my-5 g-5">
                <main class="post-grid col-md-9">
                    <div class="row">
                        <article class="property">
                            <div class="row flex-column">
                                <div class="col-md-12">
                                    <!-- product-large-slider -->
                                    <div
                                        class="swiper product-large-slider swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                                        <div class="swiper-wrapper" id="swiper-wrapper-e9f55dc6332f250d" aria-live="off"
                                            style="
                                                transition-duration: 0ms;
                                                transition-delay: 0ms;
                                            ">
                                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="5 / 5"
                                                data-swiper-slide-index="4"
                                                style="
                                                    width: 960px;
                                                    opacity: 1;
                                                    transform: translate3d(
                                                        0px,
                                                        0px,
                                                        0px
                                                    );
                                                    transition-duration: 0ms;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/item-large1.jpg"
                                                    alt="product-large" class="img-fluid" />
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="1 / 5"
                                                data-swiper-slide-index="0"
                                                style="
                                                    width: 960px;
                                                    opacity: 1;
                                                    transform: translate3d(
                                                        -960px,
                                                        0px,
                                                        0px
                                                    );
                                                    transition-duration: 0ms;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/item-large8.jpg"
                                                    alt="product-large" class="img-fluid" />
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="2 / 5"
                                                data-swiper-slide-index="1"
                                                style="
                                                    width: 960px;
                                                    opacity: 1;
                                                    transform: translate3d(
                                                        -1920px,
                                                        0px,
                                                        0px
                                                    );
                                                    transition-duration: 0ms;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/item-large5.jpg"
                                                    alt="product-large" class="img-fluid" />
                                            </div>
                                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 5"
                                                data-swiper-slide-index="2"
                                                style="
                                                    width: 960px;
                                                    opacity: 1;
                                                    transform: translate3d(
                                                        -2880px,
                                                        0px,
                                                        0px
                                                    );
                                                    transition-duration: 0ms;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/item-large4.jpg"
                                                    alt="product-large" class="img-fluid" />
                                            </div>
                                            <div class="swiper-slide swiper-slide-visible swiper-slide-active"
                                                role="group" aria-label="4 / 5" data-swiper-slide-index="3"
                                                style="
                                                    width: 960px;
                                                    opacity: 1;
                                                    transform: translate3d(
                                                        -3840px,
                                                        0px,
                                                        0px
                                                    );
                                                    transition-duration: 0ms;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/item-large9.jpg"
                                                    alt="product-large" class="img-fluid" />
                                            </div>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                    <!-- / product-large-slider -->
                                </div>
                                <div class="col-md-12 mt-2">
                                    <!-- product-thumbnail-slider -->
                                    <div thumbsslider=""
                                        class="swiper product-thumbnail-slider swiper-initialized swiper-horizontal swiper-free-mode swiper-watch-progress swiper-backface-hidden swiper-thumbs">
                                        <div class="swiper-wrapper" id="swiper-wrapper-12def418df0845ec" aria-live="off"
                                            style="
                                                transform: translate3d(
                                                    0px,
                                                    0px,
                                                    0px
                                                );
                                                transition-duration: 0ms;
                                                transition-delay: 0ms;
                                            ">
                                            <div class="swiper-slide swiper-slide-visible swiper-slide-active"
                                                role="group" aria-label="1 / 5" data-swiper-slide-index="0"
                                                style="
                                                    width: 234px;
                                                    margin-right: 8px;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/blog8.jpg" alt="image"
                                                    class="thumb-image img-fluid" />
                                            </div>
                                            <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group"
                                                aria-label="2 / 5" data-swiper-slide-index="1"
                                                style="
                                                    width: 234px;
                                                    margin-right: 8px;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/blog5.jpg" alt="image"
                                                    class="thumb-image img-fluid" />
                                            </div>
                                            <div class="swiper-slide swiper-slide-visible" role="group" aria-label="3 / 5"
                                                data-swiper-slide-index="2"
                                                style="
                                                    width: 234px;
                                                    margin-right: 8px;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/blog4.jpg" alt="image"
                                                    class="thumb-image img-fluid" />
                                            </div>
                                            <div class="swiper-slide swiper-slide-visible swiper-slide-thumb-active"
                                                role="group" aria-label="4 / 5" data-swiper-slide-index="3"
                                                style="
                                                    width: 234px;
                                                    margin-right: 8px;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/blog9.jpg" alt="image"
                                                    class="thumb-image img-fluid" />
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="5 / 5"
                                                data-swiper-slide-index="4"
                                                style="
                                                    width: 234px;
                                                    margin-right: 8px;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/blog1.jpg" alt="image"
                                                    class="thumb-image img-fluid" />
                                            </div>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <!-- / product-thumbnail-slider -->
                                </div>
                            </div>

                            <div class="post-content py-5">
                                <div class="price my-5">
                                    <h3 class="fs-2 mb-4">Price Details</h3>
                                    <p>
                                        <span class="fw-bold">Sewa / Hari :</span>
                                        Rp 999999
                                    </p>
                                    <p>
                                        <span class="fw-bold">Minimum Penyewaan:</span>
                                        2 Hari
                                    </p>
                                    <p>
                                        <span class="fw-bold">Operator / Hari :</span>
                                        Rp 10000
                                    </p>
                                </div>
                            </div>
                        </article>

                    </div>
                </main>
                <aside class="col-md-3">
                    <div class=" ">
                        <form id="form" class="form-group flex-wrap bg-light p-3">
                            <h2 class="fs-2 text-uppercase text-black my-3">
                                Book Now
                            </h2>
                            <div class="form-input col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Full Name</label>
                                <input type="text" name="email" placeholder="Write Your Name Here"
                                    class="form-control ps-3" />
                            </div>
                            <div class="form-input col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Email Address</label>
                                <input type="text" name="email" placeholder="Write Your Email Here"
                                    class="form-control ps-3" />
                            </div>
                            <div class="col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Phone Number</label>
                                <input type="text" name="email" placeholder="Phone Number"
                                    class="form-control ps-3" />
                            </div>

                            <div class="col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Pick-up Date</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="date" id="start" name="appointment" min="2023-01-01"
                                        max="2023-12-31" class="form-control ps-3" />
                                </div>
                            </div>
                            <div class="col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Pick-up Time</label>
                                <div class="input-group time" id="timepicker">
                                    <input type="time" id="start" name="appointment" min="9AM"
                                        max="6PM" class="form-control ps-3" />
                                </div>
                            </div>
                            <div class="col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Returning date</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="date" id="start" name="appointment" min="2023-01-01"
                                        max="2023-12-31" class="form-control ps-3" />
                                </div>
                            </div>
                            <div class="col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Returning Time</label>
                                <div class="input-group time" id="timepicker">
                                    <input type="time" id="start" name="appointment" min="9AM"
                                        max="6PM" class="form-control ps-3" />
                                </div>
                            </div>
                            <div class="col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Your Message</label>
                                <textarea placeholder="Write Your Message Here" class="form-control ps-3" rows="8"></textarea>
                            </div>
                            <div class="d-grid mb-3">
                                <button class="btn btn-primary btn-lg text-uppercase btn-rounded-none">
                                    Book
                                </button>
                            </div>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>

@endsection
