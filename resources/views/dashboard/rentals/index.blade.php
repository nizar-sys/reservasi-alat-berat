@extends('layouts.app')
@section('title', 'Data Transaksi Penyewaan')

@push('title-header', 'Data Transaksi Penyewaan')
@push('breadcrumbs')
    <li class="breadcrumb-item active">Data Transaksi Penyewaan</li>
@endpush

@push('action_btn')
    <a href="{{ route('rentals.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
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
                                            <th>Alat Berat</th>
                                            <th>Nama Penyewa</th>
                                            <th>Tanggal Sewa</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Total Harga Sewa</th>
                                            <th>Total Harga Sewa Operator</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($rentals as $rental)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $rental->heavyEquipment->name }}</td>
                                                <td>{{ $rental->customer->name }}</td>
                                                <td>{{ $rental->rental_date }}</td>
                                                <td>{{ $rental->return_date }}</td>
                                                <td>@currency_idr($rental->total_rental_price)</td>
                                                <td>@currency_idr($rental->total_operator_price)</td>
                                                <td>
                                                    <img src="{{ asset('/uploads/images/' . $rental->proof_of_payment) }}"
                                                        alt="{{ $rental->name }}" width="100">
                                                </td>
                                                <td>
                                                    @if ($rental->status == 'pending')
                                                        <span class="badge badge-warning">{{ ucfirst($rental->status) }}</span>
                                                    @elseif ($rental->status == 'disewa')
                                                        <span class="badge badge-success">{{ ucfirst($rental->status) }}</span>
                                                    @elseif ($rental->status == 'selesai')
                                                        <span class="badge badge-info">{{ ucfirst($rental->status) }}</span>
                                                    @endif
                                                </td>
                                                <td class="d-flex jutify-content-center">
                                                    <a href="{{ route('rentals.edit', $rental->id) }}"
                                                        class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                                    <form id="delete-form-{{ $rental->id }}"
                                                        action="{{ route('rentals.destroy', $rental->id) }}" class="d-none"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button onclick="deleteForm('{{ $rental->id }}')"
                                                        class="btn btn-sm btn-danger ml-1"><i
                                                            class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10">Data tidak ditemukan</td>
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
