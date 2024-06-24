@extends('layouts.app')
@section('title', 'Tambah Data Transaksi Penyewaann')

@push('title-header', 'Tambah Data Transaksi Penyewaann')
@push('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('rentals.index') }}">Data Transaksi Penyewaann</a></li>
    <li class="breadcrumb-item active">Tambah Data Transaksi Penyewaann</li>
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('rentals.store') }}" method="POST" role="form"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group mb-3">
                                            <label for="heavy_equipment_id">Alat Berat</label>
                                            <select class="form-control @error('heavy_equipment_id') is-invalid @enderror"
                                                id="heavy_equipment_id" name="heavy_equipment_id">
                                                <option value="" disabled selected>Pilih Alat Berat</option>
                                                @foreach ($heavyEquipments as $equipment)
                                                    <option value="{{ $equipment->id }}"
                                                        {{ old('heavy_equipment_id') == $equipment->id ? 'selected' : '' }}>
                                                        {{ $equipment->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('heavy_equipment_id')
                                                <div class="d-block invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group mb-3">
                                            <label for="customer_id">Nama Penyewa</label>
                                            <select class="form-control @error('customer_id') is-invalid @enderror"
                                                id="customer_id" name="customer_id">
                                                <option value="" disabled selected>Pilih Nama Penyewa</option>
                                                @foreach ($customers as $customer)
                                                    <option value="{{ $customer->id }}"
                                                        {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                                        {{ $customer->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('customer_id')
                                                <div class="d-block invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group mb-3">
                                            <label for="rental_date">Tanggal Sewa</label>
                                            <input type="date" class="form-control @error('rental_date') is-invalid @enderror" id="rental_date"
                                                placeholder="Tanggal Sewa" value="{{ old('rental_date') }}" name="rental_date">

                                            @error('rental_date')
                                                <div class="d-block invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group mb-3">
                                            <label for="return_date">Tanggal Pengembalian</label>
                                            <input type="date" class="form-control @error('return_date') is-invalid @enderror" id="return_date"
                                                placeholder="Tanggal Pengembalian" value="{{ old('return_date') }}" name="return_date">

                                            @error('return_date')
                                                <div class="d-block invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group mb-3">
                                            <label for="proof_of_payment">Bukti Pembayaran</label>
                                            <input type="file" class="form-control @error('proof_of_payment') is-invalid @enderror"
                                                id="proof_of_payment" placeholder="Bukti Pembayaran"
                                                name="proof_of_payment">

                                            @error('proof_of_payment')
                                                <div class="d-block invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                        <a href="{{ route('rentals.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
