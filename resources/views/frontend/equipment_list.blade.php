@extends('layouts.frontend')

@section('title', 'Heavy Equipments')

@section('content')
    <!-- hero section start  -->
    <section id="hero" class="position-relative overflow-hidden">
        <div class="pattern-overlay pattern-right position-absolute">
            <img src="{{ asset('fe_assets') }}/images/hero-pattern-right.png" alt="pattern" />
        </div>
        <div class="pattern-overlay pattern-left position-absolute">
            <img src="{{ asset('fe_assets') }}/images/hero-pattern-left.png" alt="pattern" />
        </div>
        <div class="container text-center py-5 mt-5">
            <div class="row my-5">
                <div class="d-flex flex-wrap flex-column justify-content-center align-items-center">
                    <h2 class="page-title display-3 mt-5">Cars</h2>
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="index.html">Home</a>
                        <span class="breadcrumb-item active" aria-current="page">Cars</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="cars" class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-4">
                    <div class="card">
                        <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/blog1.jpg" class="card-img-top" alt="..." /></a>
                        <div class="card-body p-4">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                <h4 class="card-title">BMW x3</h4>
                            </a>
                            <div class="card-text">
                                <ul class="d-flex list-unstyled">
                                    <li class="rental-list">Sports</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">Auto</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">
                                        4 Passengers
                                    </li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list display-small">
                                        Diesel
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <h3 class="pt-2">
                                    $369
                                    <span class="rental-price">/day</span>
                                </h3>
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="card">
                        <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/blog2.jpg" class="card-img-top" alt="..." /></a>
                        <div class="card-body p-4">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                <h4 class="card-title">BMW M2</h4>
                            </a>
                            <div class="card-text">
                                <ul class="d-flex list-unstyled">
                                    <li class="rental-list">Sports</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">Auto</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">
                                        4 Passengers
                                    </li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list display-small">
                                        Diesel
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <h3 class="pt-2">
                                    $369
                                    <span class="rental-price">/day</span>
                                </h3>
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="card">
                        <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/blog3.jpg" class="card-img-top" alt="..." /></a>
                        <div class="card-body p-4">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                <h4 class="card-title">Ford explorer</h4>
                            </a>
                            <div class="card-text">
                                <ul class="d-flex list-unstyled">
                                    <li class="rental-list">Sports</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">Auto</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">
                                        4 Passengers
                                    </li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list display-small">
                                        Diesel
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <h3 class="pt-2">
                                    $369
                                    <span class="rental-price">/day</span>
                                </h3>
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="card">
                        <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/blog4.jpg" class="card-img-top" alt="..." /></a>
                        <div class="card-body p-4">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                <h4 class="card-title">BMW x3</h4>
                            </a>
                            <div class="card-text">
                                <ul class="d-flex list-unstyled">
                                    <li class="rental-list">Sports</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">Auto</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">
                                        4 Passengers
                                    </li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list display-small">
                                        Diesel
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <h3 class="pt-2">
                                    $369
                                    <span class="rental-price">/day</span>
                                </h3>
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="card">
                        <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/blog5.jpg" class="card-img-top" alt="..." /></a>
                        <div class="card-body p-4">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                <h4 class="card-title">BMW M2</h4>
                            </a>
                            <div class="card-text">
                                <ul class="d-flex list-unstyled">
                                    <li class="rental-list">Sports</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">Auto</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">
                                        4 Passengers
                                    </li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list display-small">
                                        Diesel
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <h3 class="pt-2">
                                    $369
                                    <span class="rental-price">/day</span>
                                </h3>
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="card">
                        <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/blog6.jpg" class="card-img-top" alt="..." /></a>
                        <div class="card-body p-4">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                <h4 class="card-title">Ford explorer</h4>
                            </a>
                            <div class="card-text">
                                <ul class="d-flex list-unstyled">
                                    <li class="rental-list">Sports</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">Auto</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">
                                        4 Passengers
                                    </li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list display-small">
                                        Diesel
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <h3 class="pt-2">
                                    $369
                                    <span class="rental-price">/day</span>
                                </h3>
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="card">
                        <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/blog7.jpg" class="card-img-top" alt="..." /></a>
                        <div class="card-body p-4">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                <h4 class="card-title">BMW x3</h4>
                            </a>
                            <div class="card-text">
                                <ul class="d-flex list-unstyled">
                                    <li class="rental-list">Sports</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">Auto</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">
                                        4 Passengers
                                    </li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list display-small">
                                        Diesel
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <h3 class="pt-2">
                                    $369
                                    <span class="rental-price">/day</span>
                                </h3>
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="card">
                        <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/blog8.jpg" class="card-img-top" alt="..." /></a>
                        <div class="card-body p-4">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                <h4 class="card-title">BMW M2</h4>
                            </a>
                            <div class="card-text">
                                <ul class="d-flex list-unstyled">
                                    <li class="rental-list">Sports</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">Auto</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">
                                        4 Passengers
                                    </li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list display-small">
                                        Diesel
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <h3 class="pt-2">
                                    $369
                                    <span class="rental-price">/day</span>
                                </h3>
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <div class="card">
                        <a href="{{ route('fe.heavy-equipments.show', 1) }}"><img src="{{ asset('fe_assets') }}/images/blog9.jpg" class="card-img-top" alt="..." /></a>
                        <div class="card-body p-4">
                            <a href="{{ route('fe.heavy-equipments.show', 1) }}">
                                <h4 class="card-title">Ford explorer</h4>
                            </a>
                            <div class="card-text">
                                <ul class="d-flex list-unstyled">
                                    <li class="rental-list">Sports</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">Auto</li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list">
                                        4 Passengers
                                    </li>
                                    <li class="rental-list">
                                        <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3" alt="image" />
                                    </li>
                                    <li class="rental-list display-small">
                                        Diesel
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <h3 class="pt-2">
                                    $369
                                    <span class="rental-price">/day</span>
                                </h3>
                                <a href="{{ route('fe.heavy-equipments.show', 1) }}" class="btn btn-primary">rent now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation" class="d-flex justify-content-center mt-5">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <iconify-icon icon="solar:arrow-left-linear" class="pagination-arrow"></iconify-icon>
                        </a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <iconify-icon icon="solar:arrow-right-linear" class="pagination-arrow"></iconify-icon>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
