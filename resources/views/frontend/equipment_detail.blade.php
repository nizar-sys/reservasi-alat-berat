@extends('layouts.frontend')

@section('title', 'Heavy Equipments Detail')

@section('content')
    <!-- hero section start  -->
    <section id="hero" class="position-relative overflow-hidden">
        <div class="pattern-overlay pattern-right position-absolute">
            <img src="{{ asset('fe_assets') }}/images/hero-pattern-right.png" alt="pattern" />
        </div>
        <div class="pattern-overlay pattern-left position-absolute">
            <img src="{{ asset('fe_assets') }}/images/hero-pattern-left.png" alt="pattern" />
        </div>
        <div class="container py-5 mt-5">
            <div class="row my-5">
                <h2 class="mt-5">BMW x3</h2>

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
                                                <img src="{{ asset('fe_assets') }}/images/item-large1.jpg" alt="product-large" class="img-fluid" />
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
                                                <img src="{{ asset('fe_assets') }}/images/item-large8.jpg" alt="product-large" class="img-fluid" />
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
                                                <img src="{{ asset('fe_assets') }}/images/item-large5.jpg" alt="product-large" class="img-fluid" />
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
                                                <img src="{{ asset('fe_assets') }}/images/item-large4.jpg" alt="product-large" class="img-fluid" />
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
                                                <img src="{{ asset('fe_assets') }}/images/item-large9.jpg" alt="product-large" class="img-fluid" />
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
                                                <img src="{{ asset('fe_assets') }}/images/blog8.jpg" alt="image" class="thumb-image img-fluid" />
                                            </div>
                                            <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group"
                                                aria-label="2 / 5" data-swiper-slide-index="1"
                                                style="
                                                    width: 234px;
                                                    margin-right: 8px;
                                                ">
                                                <img src="{{ asset('fe_assets') }}/images/blog5.jpg" alt="image" class="thumb-image img-fluid" />
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
                                        <span class="fw-bold">Rent/Day :</span>
                                        9000 (negotiable)
                                    </p>
                                    <p>
                                        <span class="fw-bold">Rent/Month :</span>
                                        30,000 (negotiable)
                                    </p>
                                    <p>
                                        <span class="fw-bold">Service Charge :</span>
                                        500 (service providing)
                                    </p>
                                    <p>
                                        <span class="fw-bold">Extra Service :</span>
                                        As per Service taken
                                    </p>
                                    <p>
                                        <span class="fw-bold">Security Deposit :</span>
                                        1500
                                    </p>
                                </div>
                            </div>
                        </article>

                        <section id="post-comment">
                            <div class="container">
                                <div class="row my-5">
                                    <div class="comments-wrap">
                                        <h3 class="text-uppercase mb-5">
                                            <span class="count">3</span>
                                            Comments
                                        </h3>
                                        <div class="comment-list">
                                            <article class="comment-item pb-3 row">
                                                <div class="col-md-1">
                                                    <img src="{{ asset('fe_assets') }}/images/commentor-item1.jpg" alt="default"
                                                        class="commentor-image img-fluid rounded-circle" />
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="author-post mb-4">
                                                        <div
                                                            class="comment-meta mt-3 mt-md-0 text-uppercase d-flex gap-3 text-black">
                                                            <div class="author-name fw-bold">
                                                                Lufy carlson
                                                            </div>
                                                            <span class="meta-date -50">Jul
                                                                10</span>
                                                        </div>
                                                        <p>
                                                            Tristique tempis
                                                            condimentum diam
                                                            done
                                                            ullancomroer sit
                                                            element henddg
                                                            sit he
                                                            consequert.Tristique
                                                            tempis
                                                            condimentum diam
                                                            done
                                                            ullancomroer sit
                                                            element henddg
                                                            sit he
                                                            consequert.
                                                        </p>
                                                        <div class="comments-reply border-animation">
                                                            <a href="#">
                                                                <i class="icon icon-mail-reply"></i>Reply
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="comment-item pb-3 row child-comments">
                                                <div class="col-md-1">
                                                    <img src="{{ asset('fe_assets') }}/images/commentor-item2.jpg" alt="default"
                                                        class="commentor-image img-fluid rounded-circle" />
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="author-post mb-4">
                                                        <div
                                                            class="comment-meta mt-3 mt-md-0 text-uppercase d-flex gap-3 text-black">
                                                            <div class="author-name fw-bold">
                                                                Lora leigh
                                                            </div>
                                                            <span class="meta-date -50">Jul
                                                                10</span>
                                                        </div>
                                                        <p>
                                                            Tristique tempis
                                                            condimentum diam
                                                            done
                                                            ullancomroer sit
                                                            element henddg
                                                            sit he
                                                            consequert.Tristique
                                                            tempis
                                                            condimentum diam
                                                            done
                                                            ullancomroer sit
                                                            element henddg
                                                            sit he
                                                            consequert.
                                                        </p>
                                                        <div class="comments-reply border-animation">
                                                            <a href="#">
                                                                <i class="icon icon-mail-reply"></i>Reply
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="comment-item pb-3 row">
                                                <div class="col-md-1">
                                                    <img src="{{ asset('fe_assets') }}/images/commentor-item3.jpg" alt="default"
                                                        class="commentor-image img-fluid rounded-circle" />
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="author-post mb-4">
                                                        <div
                                                            class="comment-meta mt-3 mt-md-0 text-uppercase d-flex gap-3 text-black">
                                                            <div class="author-name fw-bold">
                                                                Natalie
                                                                dormer
                                                            </div>
                                                            <span class="meta-date -50">Jul
                                                                10</span>
                                                        </div>
                                                        <p>
                                                            Tristique tempis
                                                            condimentum diam
                                                            done
                                                            ullancomroer sit
                                                            element henddg
                                                            sit he
                                                            consequert.Tristique
                                                            tempis
                                                            condimentum diam
                                                            done
                                                            ullancomroer sit
                                                            element henddg
                                                            sit he
                                                            consequert.
                                                        </p>
                                                        <div class="comments-reply border-animation">
                                                            <a href="#">
                                                                <i class="icon icon-mail-reply"></i>Reply
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="comment-respond my-5">
                                        <h3 class="text-uppercase">
                                            Leave a Comment
                                        </h3>
                                        <p>
                                            Your email address will not be
                                            published. Required fields are
                                            marked *
                                        </p>
                                        <form method="post" class="form-group padding-small">
                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <textarea class="form-control ps-3 pt-3" id="comment" name="comment" placeholder="Write your comment here *"></textarea>
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <input class="form-control ps-3" type="text" name="author"
                                                        id="author" placeholder="Write your full name here *" />
                                                </div>
                                                <div class="col-lg-6">
                                                    <input class="form-control ps-3" type="email" name="email"
                                                        id="email" placeholder="Write your e-mail address *" />
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="d-flex align-items-center">
                                                        <input type="checkbox" class="checked-box me-2" />
                                                        <span class="label-body">Save my name,
                                                            email, and
                                                            website in this
                                                            browser for the
                                                            next time.</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-12 mt-3">
                                                    <button
                                                        class="btn btn-lg btn-primary text-uppercase btn-rounded-none w-100"
                                                        type="submit">
                                                        Post Comment
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
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

    <!-- services section start  -->
    <section id="services">
        <div class="container py-5 my-5">
            <div class="row py-5">
                <div class="pb-5 col-10 col-sm-8 col-lg-6">
                    <h2 class="">
                        See
                        <span class="text-primary">best services</span> for
                        your solution
                    </h2>
                </div>
                <div class="pb-5 col-lg-6">
                    <p class="pt-4">
                        Vitae aliquam vestibulum elit adipiscing massa diam
                        in dignissim. Risus tellus libero elementum aliquam
                        etiam. Lectus adipiscing est auctor mi quisque nunc
                        non vive adipiscing massa diam in digniss imrra est.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="service-2">
        <div class="services-sub container mb-5 pb-5">
            <div class="row">
                <div class="mt-4 col-6 col-lg-3">
                    <div class="services-components text-center pt-4 pb-3">
                        <iconify-icon class="services-icon my-2" icon="solar:shield-check-outline"></iconify-icon>
                        <h5>Secured Payment</h5>
                        <p>
                            Aliquam etiam lectus adipiscing est auctor mi
                            quisque non.
                        </p>
                    </div>
                </div>
                <div class="mt-4 col-6 col-lg-3">
                    <div class="services-components text-center pt-4 pb-3">
                        <iconify-icon class="services-icon my-2" icon="solar:bookmark-opened-outline"></iconify-icon>
                        <h5>any class vehicle</h5>
                        <p>
                            Aliquam etiam lectus adipiscing est auctor mi
                            quisque non.
                        </p>
                    </div>
                </div>
                <div class="mt-4 col-6 col-lg-3">
                    <div class="services-components text-center pt-4 pb-3">
                        <iconify-icon class="services-icon my-2" icon="solar:user-circle-outline"></iconify-icon>
                        <h5>Car sharing options</h5>
                        <p>
                            Aliquam etiam lectus adipiscing est auctor mi
                            quisque non.
                        </p>
                    </div>
                </div>
                <div class="mt-4 col-6 col-lg-3">
                    <div class="services-components text-center pt-4 pb-3">
                        <iconify-icon class="services-icon my-2" icon="solar:call-chat-outline"></iconify-icon>
                        <h5>Help center &amp; Support</h5>
                        <p>
                            Aliquam etiam lectus adipiscing est auctor mi
                            quisque non.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- blog section start  -->
    <section id="blog">
        <div class="container py-5 my-5">
            <div class="row py-5">
                <div class="pt-3 col-10 col-sm-8 col-lg-5">
                    <h2 class="">
                        Our <span class="text-primary">Recent Posts</span>
                    </h2>
                    <a href="blog.html" class="btn btn-primary mt-4">Read Blogs
                    </a>
                </div>
                <div class="mt-5 mt-lg-0 col-lg-7">
                    <div class="pt-3 d-flex">
                        <div class="">
                            <h3>
                                Jan 2 <br />
                                2023
                            </h3>
                        </div>
                        <div class="ms-5">
                            <p>Tips</p>
                            <a href="single-post.html" class="blog-title">Safest car rental services in 2023</a>
                        </div>
                    </div>
                    <hr />
                    <div class="pt-3 d-flex">
                        <div class="">
                            <h3>
                                Jan 5<br />
                                2023
                            </h3>
                        </div>
                        <div class="ms-5">
                            <p>Rental</p>
                            <a href="single-post.html" class="blog-title">Best car collection in the world</a>
                        </div>
                    </div>
                    <hr />
                    <div class="pt-3 d-flex">
                        <div class="">
                            <h3>
                                Jan 8 <br />
                                2023
                            </h3>
                        </div>
                        <div class="ms-5">
                            <p>Tricks</p>
                            <a href="single-post.html" class="blog-title">Which car is the best for travel</a>
                        </div>
                    </div>
                    <hr />
                </div>
            </div>
        </div>
    </section>
@endsection
