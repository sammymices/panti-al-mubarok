@extends('dashboard.layout.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Halaman Donasi</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Tambah Data
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{Route('dashboard.donation.barang.store')}}" method="post" enctype="multipart/form-data">
                                            @method('POST')
                                            @csrf
                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label class="form-label" for="inputEmail4">Nama</label>
                                                    <input type="name" class="form-control" value="{{old('name')}}" name="name" id="inputEmail4" placeholder="Nama Barang" required>
                                                </div>
                                                    <div class="mb-3 col-6">
                                                        <label class="form-label" for="inputAddress2">Jumlah</label>
                                                        <input type="number" class="form-control" value="{{old('amount')}}" name="amount" id="inputAddress2" placeholder="Jumlah Barang" required>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3">
                                                    <div class="mb-3 col-md-12">
                                                        <label class="form-label" for="inputAddress2">Deskripsi</label>
                                                        <textarea name="description" id="" value="{{old('description')}}" class="form-control" cols="20" rows="5" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label w-100">Foto</label>
                                                        <input type="file" name="photo" required>
                                                        <small class="form-text text-muted">Inputkan foto barang</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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
    </script>
@endsection
