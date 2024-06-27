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
                    <h2 class="page-title display-3 mt-5">Heavy Equipments</h2>
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ url('/', []) }}">Home</a>
                        <span class="breadcrumb-item active" aria-current="page">Heavy Equipments</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="cars" class="my-5 py-5">
        <div class="container">
            <div class="row">
                @forelse ($heavyEquipments as $item)
                    <div class="col-md-4 my-4">
                        <div class="card">
                            <a href="{{ route('fe.heavy-equipments.show', $item->id) }}"><img
                                    src="{{ asset('/uploads/images/' . $item->image) }}" class="card-img-top"
                                    alt="..." /></a>
                            <div class="card-body p-4">
                                <a href="{{ route('fe.heavy-equipments.show', $item->id) }}">
                                    <h4 class="card-title">{{ $item->name }}</h4>
                                </a>
                                <div class="card-text">
                                    <ul class="d-flex list-unstyled">
                                        <li class="rental-list">Sports</li>
                                        <li class="rental-list">
                                            <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3"
                                                alt="image" />
                                        </li>
                                        <li class="rental-list">Auto</li>
                                        <li class="rental-list">
                                            <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3"
                                                alt="image" />
                                        </li>
                                        <li class="rental-list">
                                            4 Passengers
                                        </li>
                                        <li class="rental-list">
                                            <img src="{{ asset('fe_assets') }}/images/dot.png" class="px-3"
                                                alt="image" />
                                        </li>
                                        <li class="rental-list display-small">
                                            Diesel
                                        </li>
                                    </ul>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between">
                                    <h3 class="pt-2">
                                        @currency_idr($item->rental_price)
                                        <span class="rental-price">/ day</span>
                                    </h3>
                                </div>
                                <a href="{{ route('fe.heavy-equipments.show', $item->id) }}" class="btn btn-primary">rent now
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <nav aria-label="Page navigation" class="d-flex justify-content-center mt-5">
                {!! $heavyEquipments->links() !!}
            </nav>
        </div>
    </section>
@endsection
