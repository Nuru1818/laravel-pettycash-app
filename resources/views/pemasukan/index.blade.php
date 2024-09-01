@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p class="h4">Rekap Data Pemasukan</p>
                        <a href="{{ route('pemasukan.create') }}" class="btn border-primary">Tambah Data</a>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="data-table">
                                <thead>
                                    <th>Sumber Pemasukan</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Nominal</th>
                                    <th>Pilihan</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->sumber_pemasukan }}</td>
                                            <td>{{ $item->tanggal_masuk }}</td>
                                            <td>{{ $item->nomimal }}</td>
                                            <td>
                                                <a href="{{ route('pemasukan.show', $item->id) }}"
                                                    class="btn border-primary">Detail</a>
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
    </div>
@endsection
