@extends('layouts.app')
@section('title', 'Data Alat Berat')

@push('title-header', 'Data Alat Berat')
@push('breadcrumbs')
    <li class="breadcrumb-item active">Data Alat Berat</li>
@endpush

@push('action_btn')
    <a href="{{ route('heavy-equipments.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-footer">
                            <div class="card-tools">
                                @stack('action_btn')
                            </div>
                        </div>
                        <div class="card-body bg-transparent border-0 text-dark">
                            <div class="table-responsive">
                                <table class="table table-flush table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama Alat Berat</th>
                                            <th>Harga Sewa <small>(per hari)</small></th>
                                            <th>Harga Operator <small>(per hari)</small></th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($heavyEquipments as $heavyEquipment)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset('/uploads/images/' . $heavyEquipment->image) }}"
                                                        alt="{{ $heavyEquipment->name }}" width="100">
                                                </td>
                                                <td>{{ $heavyEquipment->name }}</td>
                                                <td>@currency_idr($heavyEquipment->rental_price)</td>
                                                <td>@currency_idr($heavyEquipment->operator_price)</td>
                                                <td class="d-flex jutify-content-center">
                                                    <a href="{{ route('heavy-equipments.edit', $heavyEquipment->id) }}"
                                                        class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                                    <form id="delete-form-{{ $heavyEquipment->id }}"
                                                        action="{{ route('heavy-equipments.destroy', $heavyEquipment->id) }}"
                                                        class="d-none" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button onclick="deleteForm('{{ $heavyEquipment->id }}')"
                                                        class="btn btn-sm btn-danger ml-1"><i
                                                            class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">Tidak ada data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        function deleteForm(id) {
            Swal.fire({
                title: 'Hapus data',
                text: "Anda akan menghapus data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(`#delete-form-${id}`).submit()
                }
            })
        }
    </script>
@endsection
