@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detail Pemasukan</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <th>Sumber Pemasukan</th>
                                    <td>{{ $data->sumber_pemasukan }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <td>{{ $data->tanggal_masuk }}</td>
                                </tr>
                                <tr>
                                    <th>Nominal</th>
                                    <td>(IDR) {{ $data->nomimal }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>{!! $data->keterangan !!}</td>
                                </tr>
                                <tr>
                                    <th>Bukti Transaksi</th>
                                    <td>
                                        <img src="{{ asset('storage/images/transfer/' . $data->bukti_transaksi) }}"
                                            class="w-25" />

                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('pemasukan.edit', $data->id) }}" class="btn btn-warning m-2">Edit</a>

                        <form action="{{ route('pemasukan.destroy', $data->id) }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah yakin akan dihapus?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
