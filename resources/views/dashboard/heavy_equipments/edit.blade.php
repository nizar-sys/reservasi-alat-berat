@extends('layouts.app')
@section('title', 'Ubah Data Alat Berat')

@push('title-header', 'Ubah Data Alat Berat')
@push('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('heavy-equipments.index') }}">Data Alat Berat</a></li>
    <li class="breadcrumb-item active">Ubah Data Alat Berat</li>
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('heavy-equipments.update', $heavyEquipment->id) }}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group mb-3">
                                    <label for="image">Foto</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="image" placeholder="Foto Alat Berat"
                                        name="image">

                                    @error('image')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    <small class="text-danger">
                                        * Kosongkan jika tidak ingin mengubah foto
                                    </small>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                                placeholder="Nama Alat Berat" value="{{ old('name', $heavyEquipment->name) }}" name="name">

                                            @error('name')
                                                <div class="d-block invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label for="rental_price">Harga Sewa</label>
                                            <input type="number" class="form-control @error('rental_price') is-invalid @enderror"
                                                id="rental_price" placeholder="Harga Sewa Alat Berat" value="{{ old('rental_price', $heavyEquipment->rental_price) }}"
                                                name="rental_price">

                                            @error('rental_price')
                                                <div class="d-block invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label for="operator_price">Harga Operator</label>
                                            <input type="number" class="form-control @error('operator_price') is-invalid @enderror"
                                                id="operator_price" placeholder="Harga Operator Alat Berat" value="{{ old('operator_price', $heavyEquipment->operator_price) }}"
                                                name="operator_price">

                                            @error('operator_price')
                                                <div class="d-block invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                                        <a href="{{route('heavy-equipments.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
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
