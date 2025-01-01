@extends('dashboard.layout.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Halaman Donasi Uang</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="card-title">List Donasi Uang</h5>
                                    <h6 class="card-subtitle text-muted">List donasi uang yang telah diterima di panti asuhan.</h6>
                                </div>
                                <div class="col-6 text-end">
                                    <a target="_blank" href="{{ route('dashboard.printMoneyDonation') }}" class="btn btn-danger">Cetak PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Bukti Transfer</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donations as $donation)
                                    <tr>
                                        <td>{{ $donation->user->name }}</td>
                                        <td>
                                            <img width="75" height="75"
                                            src="{{ asset('storage/' . $donation->photo) }}" alt="">
                                        </td>
                                        <td>{{ $donation->description }}</td>
                                        <td>{{ \Carbon\Carbon::parse($donation->date)->format('d M Y') }}</td>
                                        <td>Rp.{{ number_format($donation->amount) }}</td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('dashboard.donation.uang.edit', $donation->order_id) }}">
                                                <i class="align-middle" data-feather="edit-2"></i>
                                            </a>
                                            <a class="btn btn-danger delete" data-id="{{ $donation->order_id }}">
                                                <i class="align-middle" data-feather="trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <x-delete-modal></x-delete-modal>
    </main>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            $("#datatables-reponsive").DataTable({
                responsive: true
            });
        });

        // delete modal
        $(document).on('click', '.delete', function() {
            $('#exampleModal').modal('show');
            const id = $(this).attr('data-id');
            let url = `{{ route('dashboard.donation.uang.destroy', ':id') }}`.replace(':id', id);
            $('#deleteForm').attr('action', url);
        });
    </script>
@endsection