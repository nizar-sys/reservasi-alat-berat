@extends('layouts.frontend')

@section('title', 'Home')

@section('content')
    <!-- hero section start  -->
    <section id="hero">
        <div class="hero-content text-center bg-hero">
        </div>
    </section>


    <!-- testimonial section start  -->
    <section id="about-us" class="position-relative">
        <div class="container my-5 py-5">
            <div class="row">
                <h4>Welcome To Heavy Equipment</h4>
                <div class="col-md-6 mt-3">
                    <p>Selamat datang di Heavy Equipment Rent, tujuan utama Anda untuk penyewaan alat berat. Dengan komitmen
                        terhadap keunggulan dan fokus pada kepuasan pelanggan, kami berupaya menyediakan mesin dan peralatan
                        berkualitas tinggi untuk memenuhi semua kebutuhan konstruksi dan industri Anda.</p>
                </div>
                <hr>
                <div class="col-md-6 mt-3">
                    <h4>Visi</h4>
                    <p>Kami ingin selalu menjadi yg terdepan dalam industri konstruksi.</p>
                </div>
                <div class="col-md-6 mt-3">
                    <h4>Misi</h4>
                    <p>Prioritas utama kami adalah selalu memberikan jasa dengan standar mutu, waktu, dan biaya dengan
                        memperdulikan keselamatan kerja dan lingkungan.</p>
                </div>
            </div>
        </div>



    </section>



    <!-- rental section start  -->
    <section id="rental" class="position-relative">
        <div class="container my-5 py-5">
            <h2 class=" text-center my-5">List Heavy Vehicle For<span class="text-primary"> Reservation</span> </h2>

            <div class="swiper-button-next rental-swiper-next  rental-arrow position-absolute"></div>
            <div class="swiper-button-prev rental-swiper-prev rental-arrow position-absolute"></div>

            <div class="swiper rental-swiper mb-5">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img
                                    src="{{ asset('fe_assets') }}/images/car1.png" class="card-img-top" alt="..."></a>
                            <div class="card-body p-4">
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                    <h4 class="card-title">Excavator - Kobelco
                                        Kobelco SK200</h4>
                                </a>
                                <div class="card-text ">
                                    <ul class="d-flex list-unstyled">
                                        <li class="rental-list">
                                            Belco
                                        </li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list">Harga Sewa Perhari : Rp 9999999</li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list">Minimum Penyewaan : 2 Hari</li>
                                        <li class="rental-list"> <img src="{{ asset('fe_assets') }}/images/dot.png"
                                                class="px-3" alt="image">
                                        </li>
                                        <li class="rental-list display-small">Harian Operator : Rp 1000000</li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <h3 class="pt-2">Rp 999999<span class="rental-price">/day</span></h3>
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img
                                    src="{{ asset('fe_assets') }}/images/car2.png" class="card-img-top" alt="..."></a>
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
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img
                                    src="{{ asset('fe_assets') }}/images/car3.png" class="card-img-top" alt="..."></a>
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
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img
                                    src="{{ asset('fe_assets') }}/images/car1.png" class="card-img-top"
                                    alt="..."></a>
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
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img
                                    src="{{ asset('fe_assets') }}/images/car2.png" class="card-img-top"
                                    alt="..."></a>
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
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img
                                    src="{{ asset('fe_assets') }}/images/car3.png" class="card-img-top"
                                    alt="..."></a>
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
                                    <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>



    </section>

    <!-- services section start  -->
    <section id="services">

        <div class="container py-5 my-5">
            <div class="row py-5 ">
                <div class="col-md-6">
                    <img src="{{ asset('fe_assets') }}/images/service_image.png" alt="">
                </div>
                <div class="pb-5 col-10 col-sm-8 col-lg-6">
                    <h2 class=""><span class="text-primary">SERVICES</span></h2>
                    <p>Kami menawarkan layanan penyewaan alat berat harian untuk berbagai kebutuhan proyek. Armada kami
                        mencakup ekskavator, buldozer, dan crane, serta operator berpengalaman. Dengan fokus pada keandalan
                        dan kepuasan pelanggan, kami siap mendukung kesuksesan proyek Anda.
                    </p>
                </div>
            </div>

        </div>

    </section>

    <!-- faq section start  -->
    <section id="faq">
        <div class="container my-5 py-5">
            <h2 class="text-center my-5">Cara Terbaik<span class="text-primary"> Sewa Alat Berat</span></h2>

            <div class="row">
                <div class="col-md-6">
                    <h5>Browse conveniently.</h5>
                    <p>
                        Kami hadir untuk membantu bagian pengadaan Anda. Akses direktori kami dan temukan beberapa aset alat
                        konstruksi yang siap Anda sewa kapan saja dan dari mana saja.
                    </p>
                    <h5>Talk to our experts.</h5>
                    <p>
                        Kami melayani setiap permintaan dengan sepenuh hati. Manfaatkan jasa konsultasi dengan pakar kami
                        untuk mengetahui solusi paling tepat untuk pekerjaan Anda.
                    </p>
                    <h5>We do the heavy lifting for you.</h5>
                    <p>
                        Ucapkan selamat tinggal kepada proses pengadaan yang rumit. Hemat waktu dengan Trek. Mulai dari
                        logistik hingga administrasi, kami sudah mengurus semuanya buat Anda.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('fe_assets') }}/images/faq-image.png" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </section>

@endsection
