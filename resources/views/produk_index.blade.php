@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Pengguna_ID</th>
                                    <th>Total_Harga</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $a)
                                    <tr>
                                        <td>{{ $a->id }}</td>
                                        <td>{{ $a->Tanggal }}</td>
                                        <td>{{ $a->Pengguna_ID }}</td>
                                        <td>{{ $a->Total_Harga }}</td>
                                        <td>{{ $a->Status }}</td>
                                        <td>{{ $a->created_at }}</td>
                                        <td> edit</td>
                                        <a href="{{ url('produk/' . $a->id . '/edit', []) }}"
                                            class="btn btn-primary btn-sm">Edit</a>

                                        <form action="{{ url('produk/' . $a->id, []) }}" method="post"
                                            class="d-inline"onsubmit="return confirm('Apakah Dihapus?')">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $produk->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
