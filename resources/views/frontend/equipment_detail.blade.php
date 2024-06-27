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
                <h2 class="mt-5">{{ $equipment->name }}</h2>

                <div class="d-flex">
                    <p class="fs-5 fw-semibold">For Rent</p>
                    <p style="color: #94ca21">&nbsp; | &nbsp;</p>
                    <p class="fs-5 fw-semibold">Price : @currency_idr($equipment->rental_price) / day</p>
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
                                                <img src="{{ asset('/uploads/images/' . $equipment->image) }}"
                                                    alt="product-large" class="img-fluid" />
                                            </div>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                    <!-- / product-large-slider -->
                                </div>
                            </div>

                            <div class="post-content py-5">
                                <div class="price my-5">
                                    <h3 class="fs-2 mb-4">Price Details</h3>
                                    <p>
                                        <span class="fw-bold">Sewa per Hari :</span>
                                        @currency_idr($equipment->rental_price)
                                    </p>
                                    <p>
                                        <span class="fw-bold">Operator per Hari :</span>
                                        @currency_idr($equipment->operator_price)
                                    </p>
                                </div>
                            </div>
                        </article>

                    </div>
                </main>
                <aside class="col-md-3">
                    <div class=" ">
                        <form id="form" class="form-group flex-wrap bg-light p-3" action="{{ route('rentals.store', []) }}" method="POST">
                            @csrf
                            <input type="hidden" name="heavy_equipment_id" value="{{ $equipment->id }}">
                            <input type="hidden" name="customer_id" value="{{ $user->id }}">
                            <input type="hidden" name="role" value="customer">

                            <h2 class="fs-2 text-uppercase text-black my-3">
                                Book Now
                            </h2>
                            <div class="form-input col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Nama</label>
                                <input type="text" name="name" placeholder="Write Your Name Here"
                                    class="form-control ps-3" value="{{ $user->name }}" disabled />
                            </div>
                            <div class="form-input col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Email</label>
                                <input type="text" name="email" placeholder="Write Your Email Here"
                                    class="form-control ps-3" value="{{ $user->email }}" disabled />
                            </div>
                            <div class="col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Tanggal Sewa</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="date" id="start" name="rental_date" class="form-control ps-3" />
                                </div>
                            </div>
                            <div class="col-lg-12 my-4">
                                <label for="exampleInputEmail1"
                                    class="form-label fs-6 text-uppercase fw-bold text-black">Tanggal Kembali</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="date" id="end" name="return_date" class="form-control ps-3" />
                                </div>
                            </div>
                            <div class="d-grid mb-3">
                                <button class="btn btn-primary btn-lg text-uppercase btn-rounded-none" type="button"
                                    id="confirm-button">
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

@section('script')
    <script src="{{ asset('newassets') }}/plugins/jquery/jquery.min.js"></script>
    <script>
        var heavyEquipment = @json($equipment);
    </script>
    <script>
        $(document).ready(function() {
            $('#confirm-button').on('click', function(event) {
                event.preventDefault();

                const name = $('[name="name"]').val();
                const rentalDate = new Date($('[name="rental_date"]').val());
                const returnDate = new Date($('[name="return_date"]').val());
                const rentalDays = Math.abs(returnDate - rentalDate) / (1000 * 60 * 60 * 24);

                // validasi tanggal sewa dan tanggal kembali required
                if ($('[name="rental_date"]').val() == '' || $('[name="return_date"]').val() == '') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Tanggal Sewa dan Tanggal Kembali harus diisi!',
                    });
                    return;
                }

                // validasi tanggal sewa dan tanggal kembali
                if (rentalDate > returnDate) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Tanggal Sewa harus lebih kecil dari Tanggal Kembali!',
                    });
                    return;
                }

                // validasi rental date tidak boleh hari ini
                if (rentalDate < new Date()) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Tanggal Sewa harus lebih besar dari hari ini!',
                    });
                    return;
                }

                // validasi jika hanya 0 hari
                if (rentalDays == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Minimal sewa 1 hari!',
                    });
                    return;
                }

                // sweetalert confirm
                Swal.fire({
                    title: 'Pesanan Saya',
                    html: `
                        <ul class="list-unstyled text-left">
                            <li>Nama : ${name}</li>
                            <li>Detail Alat : ${heavyEquipment.name}</li>
                            <li>Tanggal Sewa : ${$('[name="rental_date"]').val()}</li>
                            <li>Lama Sewa : ${rentalDays} Hari</li>
                        </ul>
                    `,
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Lanjutkan!',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // buat swal untuk detail biaya dan total lalu input type file untuk bukti pembayaran
                        Swal.fire({
                            title: 'Detail Biaya',
                            html: `
                                <ul class="list-unstyled text-left">
                                    <li>Harga Sewa : ${currencyIdr(heavyEquipment.rental_price)}</li>
                                    <li>Biaya Operator : ${currencyIdr(heavyEquipment.operator_price)}</li>
                                    <li>Lama Sewa : ${rentalDays} Hari</li>
                                    <li>Total : ${currencyIdr((parseFloat(heavyEquipment.rental_price) + parseFloat(heavyEquipment.operator_price)) * rentalDays)}</li>
                                </ul>
                            `,
                            icon: 'info',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Sewa Sekarang!',
                            cancelButtonText: 'Batal',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // submit form
                                $('#form').submit();
                            }
                        });

                        // Fungsi untuk format mata uang
                        function currencyIdr(value) {
                            return new Intl.NumberFormat('id-ID', {
                                style: 'currency',
                                currency: 'IDR'
                            }).format(value);
                        }

                    }
                });
            });
        });
    </script>
@endsection
