@extends('layouts.frontend')

@section('title', 'My Transactions')

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
                    <h2 class="page-title display-3 mt-5">My Transactions</h2>
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="{{ url('/', []) }}">Home</a>
                        <span class="breadcrumb-item active" aria-current="page">My Transactions</span>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="cars" class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
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
                                                        <span
                                                            class="badge text-dark bg-warning">{{ ucfirst($rental->status) }}</span>
                                                    @elseif ($rental->status == 'disewa')
                                                        <span
                                                            class="badge text-dark bg-success">{{ ucfirst($rental->status) }}</span>
                                                    @elseif ($rental->status == 'selesai')
                                                        <span
                                                            class="badge text-dark bg-info">{{ ucfirst($rental->status) }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (!$rental->proof_of_payment)
                                                        <!-- Trigger button -->
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal{{ $rental->id }}"
                                                            class="btn btn-sm btn-warning">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="modal{{ $rental->id }}"
                                                            tabindex="-1" aria-labelledby="modalLabel{{ $rental->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="modalLabel{{ $rental->id }}">Upload Bukti
                                                                            Pembayaran</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form id="form{{ $rental->id }}"
                                                                            action="{{ route('rentals.update', $rental->id) }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <input type="hidden" name="heavy_equipment_id"
                                                                                value="{{ $rental->heavy_equipment_id }}">
                                                                            <input type="hidden" name="customer_id"
                                                                                value="{{ $rental->customer_id }}">
                                                                            <input type="hidden" name="rental_date"
                                                                                value="{{ $rental->rental_date }}">
                                                                            <input type="hidden" name="return_date"
                                                                                value="{{ $rental->return_date }}">
                                                                            <input type="hidden" name="role"
                                                                                value="customer">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="proof_of_payment{{ $rental->id }}">Bukti
                                                                                    Pembayaran</label>
                                                                                <input type="file" class="form-control"
                                                                                    id="proof_of_payment{{ $rental->id }}"
                                                                                    name="proof_of_payment" required>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Batal</button>
                                                                        <button type="button" class="btn btn-sm"
                                                                            onclick="submitForm({{ $rental->id }})">Upload</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- JavaScript to submit form -->
                                                        <script>
                                                            function submitForm(rentalId) {
                                                                document.getElementById(`form${rentalId}`).submit();
                                                            }
                                                        </script>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10" class="text-center">No data available in table</td>
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
