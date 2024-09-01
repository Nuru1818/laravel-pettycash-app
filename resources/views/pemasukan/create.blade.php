@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Input Data Pemasukan</div>

                    <form action="{{ route('pemasukan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group p-3">
                                <label>Sumber Dana / Pemasukan</label>
                                <input type="text" name="sumber_pemasukan" class="form-control" required>
                            </div>
                            <div class="form-group p-3">
                                <label>Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" class="form-control" required>
                            </div>
                            <div class="form-group p-3">
                                <label>Nominal (IDR)</label>
                                <input type="number" name="nomimal" class="form-control" required>
                            </div>
                            <div class="form-group p-3">
                                <label>Bukti Transaksi</label>
                                <input type="file" name="bukti_transaksi" class="form-control" required>
                            </div>
                            <div class="form-group p-3">
                                <label>Keterangan</label>
                                <textarea name="keterangan" id="content" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
