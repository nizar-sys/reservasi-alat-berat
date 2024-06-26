<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>

    <!--vendor css ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fe_assets') }}/css/vendor.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--Bootstrap ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fe_assets') }}/style.css">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Raleway:wght@400;700&display=swap"
        rel="stylesheet">


    <!-- script ================================================== -->
    <script src="{{ asset('fe_assets') }}/js/modernizr.js"></script>
    @yield('css')

</head>

<body data-bs-spy="scroll" data-bs-target="#header-nav" tabindex="0">

    <nav class="navbar navbar-expand-lg  navbar-light container-fluid py-3 position-fixed ">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('fe_assets') }}/images/logos.png"
                    alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav align-items-center justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link px-3" aria-current="page" href="/#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#rental">Vehicle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" href="#action">Contact</a>
                        </li>
                        <li>
                            <a class="nav-link px-3" href="{{ route('fe.heavy-equipments.index', []) }}">Heavy Vehicle
                                List</a>
                        </li>
                    </ul>

                    <div class="d-flex mt-5 mt-lg-0 ps-xl-5 align-items-center justify-content-center ">
                        <ul class="navbar-nav justify-content-end align-items-center">
                            <li class="nav-item">
                                <a class="nav-link px-3" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Login </a>
                            </li>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="tabs-listing">
                                                <nav>
                                                    <div class="nav nav-tabs d-flex justify-content-center border-0"
                                                        id="nav-tab" role="tablist">
                                                        <button
                                                            class="btn btn-outline-primary text-uppercase me-3 active"
                                                            id="nav-sign-in-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-sign-in" type="button"
                                                            role="tab" aria-controls="nav-sign-in"
                                                            aria-selected="true">Log
                                                            In</button>
                                                        <button class="btn btn-outline-primary text-uppercase"
                                                            id="nav-register-tab" data-bs-toggle="tab"
                                                            data-bs-target="#nav-register" type="button"
                                                            role="tab" aria-controls="nav-register"
                                                            aria-selected="false">Sign
                                                            Up</button>
                                                    </div>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade active show" id="nav-sign-in"
                                                        role="tabpanel" aria-labelledby="nav-sign-in-tab">
                                                        <form id="form1" class="form-group flex-wrap p-3 ">
                                                            <div class="form-input col-lg-12 my-4">
                                                                <label for="exampleInputEmail1"
                                                                    class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                                                    Address</label>
                                                                <input type="text" id="exampleInputEmail1"
                                                                    name="email" placeholder="Email"
                                                                    class="form-control ps-3">
                                                            </div>
                                                            <div class="form-input col-lg-12 my-4">
                                                                <label for="inputPassword1"
                                                                    class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                                                <input type="password" id="inputPassword1"
                                                                    placeholder="Password" class="form-control ps-3"
                                                                    aria-describedby="passwordHelpBlock">
                                                                <div id="passwordHelpBlock"
                                                                    class="form-text text-center">
                                                                    <a href="#" class=" password">Forgot
                                                                        Password ?</a>
                                                                </div>

                                                            </div>
                                                            <label class="py-3">
                                                                <input type="checkbox" required=""
                                                                    class="d-inline">
                                                                <span class="label-body text-black">Remember Me</span>
                                                            </label>
                                                            <div class="d-grid my-3">
                                                                <button
                                                                    class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Log
                                                                    In</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-register" role="tabpanel"
                                                        aria-labelledby="nav-register-tab">
                                                        <form id="form2" class="form-group flex-wrap p-3 ">
                                                            <div class="form-input col-lg-12 my-4">
                                                                <label for="exampleInputEmail2"
                                                                    class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                                                    Address</label>
                                                                <input type="text" id="exampleInputEmail2"
                                                                    name="email" placeholder="Email"
                                                                    class="form-control ps-3">
                                                            </div>
                                                            <div class="form-input col-lg-12 my-4">
                                                                <label for="inputPassword2"
                                                                    class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                                                <input type="password" id="inputPassword2"
                                                                    placeholder="Password" class="form-control ps-3"
                                                                    aria-describedby="passwordHelpBlock">
                                                            </div>
                                                            <label class="py-3">
                                                                <input type="checkbox" required=""
                                                                    class="d-inline">
                                                                <span class="label-body text-black">I agree to the <a
                                                                        href="#"
                                                                        class="text-black password border-bottom">Privacy
                                                                        Policy</a>
                                                                </span>
                                                            </label>
                                                            <div class="d-grid my-3">
                                                                <button
                                                                    class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
                                                                    Up</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                        <button type="button" class="btn btn-outline-primary nav-button mx-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2"> Sign in </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tabs-listing">
                                            <nav>
                                                <div class="nav nav-tabs d-flex justify-content-center border-0"
                                                    id="nav-tab2" role="tablist">
                                                    <button class="btn btn-outline-primary text-uppercase me-4 "
                                                        id="nav-sign-in-tab2" data-bs-toggle="tab"
                                                        data-bs-target="#nav-sign-in2" type="button" role="tab"
                                                        aria-controls="nav-sign-in2" aria-selected="false">Log
                                                        In</button>
                                                    <button class="btn btn-outline-primary text-uppercase active"
                                                        id="nav-register-tab2" data-bs-toggle="tab"
                                                        data-bs-target="#nav-register2" type="button" role="tab"
                                                        aria-controls="nav-register2" aria-selected="true">Sign
                                                        Up</button>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent1">
                                                <div class="tab-pane fade " id="nav-sign-in2" role="tabpanel"
                                                    aria-labelledby="nav-sign-in-tab2">
                                                    <form id="form3" class="form-group flex-wrap p-3 ">
                                                        <div class="form-input col-lg-12 my-4">
                                                            <label for="exampleInputEmail3"
                                                                class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                                                Address</label>
                                                            <input type="text" id="exampleInputEmail3"
                                                                name="email" placeholder="Email"
                                                                class="form-control ps-3">
                                                        </div>
                                                        <div class="form-input col-lg-12 my-4">
                                                            <label for="inputPassword3"
                                                                class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                                            <input type="password" id="inputPassword3"
                                                                placeholder="Password" class="form-control ps-3"
                                                                aria-describedby="passwordHelpBlock">
                                                            <div id="passwordHelpBlock2"
                                                                class="form-text text-center">
                                                                <a href="#" class=" password">Forgot Password
                                                                    ?</a>
                                                            </div>

                                                        </div>
                                                        <label class="py-3">
                                                            <input type="checkbox" required="" class="d-inline">
                                                            <span class="label-body text-black">Remember Me</span>
                                                        </label>
                                                        <div class="d-grid my-3">
                                                            <button
                                                                class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Log
                                                                In</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade active show" id="nav-register2"
                                                    role="tabpanel" aria-labelledby="nav-register-tab2">
                                                    <form id="form4" class="form-group flex-wrap p-3 ">
                                                        <div class="form-input col-lg-12 my-4">
                                                            <label for="exampleInputEmail4"
                                                                class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                                                Address</label>
                                                            <input type="text" id="exampleInputEmail4"
                                                                name="email" placeholder="Email"
                                                                class="form-control ps-3">
                                                        </div>
                                                        <div class="form-input col-lg-12 my-4">
                                                            <label for="inputPassword4"
                                                                class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                                            <input type="password" id="inputPassword4"
                                                                placeholder="Password" class="form-control ps-3"
                                                                aria-describedby="passwordHelpBlock">
                                                        </div>
                                                        <label class="py-3">
                                                            <input type="checkbox" required="" class="d-inline">
                                                            <span class="label-body text-black">I agree to the <a
                                                                    href="#"
                                                                    class="text-black password border-bottom">Privacy
                                                                    Policy</a>
                                                            </span>
                                                        </label>
                                                        <div class="d-grid my-3">
                                                            <button
                                                                class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
                                                                Up</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- call-to-action section start  -->
    <section id="action" class="position-relative">

        <div class="pattern-overlay pattern-right position-absolute">
            <img src="{{ asset('fe_assets') }}/images/call-to-action-pattern.png" alt="pattern">
        </div>

        <div class="container py-5 my-5">
            <div class="row py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <h2>Contact Us</h2>
                </div>
                <div class="col-lg-6">
                    <p>Kami siap membantu Anda dengan segala kebutuhan penyewaan alat berat. Jangan ragu untuk
                        menghubungi kami melalui informasi di bawah ini</p>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" target="_blank" class="contact-link">
                                <div class="d-flex align-items-center">
                                    <iconify-icon class="social-link-icon pe-2" icon="mdi:call"></iconify-icon>
                                    <div>
                                        <div>Call Us</div>
                                        <div>62819999823764</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="_blank" class="contact-link mt-3">
                                <div class="d-flex align-items-center">
                                    <iconify-icon class="social-link-icon pe-2" icon="mdi:email"></iconify-icon>
                                    <div>
                                        <div>Email Us</div>
                                        <div>heavy@gmail.com</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" target="_blank" class="contact-link">
                                <div class="d-flex align-items-center">
                                    <iconify-icon class="social-link-icon pe-2" icon="mdi:clock"></iconify-icon>
                                    <div>
                                        <div>Operational</div>
                                        <div>09.00-21.00</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" target="_blank" class="contact-link mt-3">
                                <div class="d-flex align-items-center">
                                    <iconify-icon class="social-link-icon pe-2" icon="mdi:pin"></iconify-icon>
                                    <div>
                                        <div>Location</div>
                                        <div>Jln. mawar no. 13</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Footer Section Starts -->
    <section id="footer">
        <div class="container footer-container mt-5">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 my-5 py-5 ">

                <div class=" col-md-4 mt-5 mt-md-0 ">
                    <img src="{{ asset('fe_assets') }}/images/logos.png" alt="image">
                    <p class="py-3">Selamat datang di Heavy Equipment Rent, tujuan utama Anda untuk penyewaan alat
                        berat. Dengan komitmen terhadap keunggulan dan fokus pada kepuasan pelanggan, kami berupaya
                        menyediakan mesin dan peralatan berkualitas tinggi untuk memenuhi semua kebutuhan konstruksi dan
                        industri Anda.</p>
                    <div class="d-flex align-items-center ">
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:facebook"></iconify-icon></a>
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:twitter"></iconify-icon></a>
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:instagram"></iconify-icon></a>
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:linkedin"></iconify-icon></a>
                        <a href="#" target="_blank"><iconify-icon class="social-link-icon pe-4"
                                icon="mdi:youtube"></iconify-icon></a>
                    </div>

                </div>

                <div class="col-md-7 offset-md-1 mt-5">
                    <ul class="footer-nav list-unstyled ">
                        <li class="nav-item me-2 mb-3">
                            <a class="nav-link px-4" aria-current="page" href="#">Home</a>
                        </li>
                        <a class="nav-link px-4" href="#about-us">About Us</a>
                        <li class="nav-item me-2 mb-3">
                        </li>
                        <li class="nav-item me-2 mb-3">
                            <a class="nav-link px-4" href="#rental">Vehicle</a>
                        </li>
                        <li class="nav-item me-2 mb-3">
                            <a class="nav-link px-4" href="#services">Services</a>
                        </li>
                        <li class="nav-item me-2 mb-3">
                            <a class="nav-link px-4" href="#faq">FAQ</a>
                        </li>
                        <li class="nav-item me-2 mb-3">
                            <a class="nav-link px-4" href="#">Contact</a>
                        </li>
                    </ul>
                </div>

            </footer>
        </div>



        <footer class="d-flex flex-wrap justify-content-between align-items-center border-top"></footer>

        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 pt-4">
                <div class="col-md-6 d-flex align-items-center">
                    <p>© {{ now()->format('Y') }} Heavy Equipment - All rights reserved</p>

                </div>
            </footer>
        </div>
    </section>

    <!-- script ================================================== -->
    <script src="{{ asset('fe_assets') }}/js/jquery-1.11.0.min.js"></script>
    <script src="{{ asset('fe_assets') }}/js/plugins.js"></script>
    <script src="{{ asset('fe_assets') }}/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    @yield('script')
</body>

</html>
