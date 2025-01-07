@extends('layouts.sbadmin2')
@section('isinya')
    <div class="container-fluid">
        <div class="row jutify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data Produk
                    </div>
                    <div class="card-body">
                        <form action="{{ url('produk/' . $Produk->id, []) }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="Tanggal">TANGGAL</label>
                                <input id="Tanggal" class="form-control" type="text" name="Tanggal"
                                    value="{{ old('Tanggal') }}">
                                <span class="text-danger">{{ $errors->first('Tanggal') }}</span>

                            </div>

                            <div class="form-group">
                                <label for="Pengguna_ID ">Pengguna ID </label>
                                <input id="Pengguna_ID " class="form-control" type="text" name="Pengguna_ID "
                                    value="{{ old('Pengguna_ID ') }}">
                                <span class="text-danger">{{ $errors->first('Pengguna_ID') }}</span>


                            </div>

                            <div class="form-group">
                                <label for="Total_Harga">Total Harga </label>
                                <input id="Total_Harga" class="form-control" type="text" name="Total_Harga"
                                    value="{{ old('Total_Harga') }}">
                                <span class="text-danger">{{ $errors->first('Total_Harga') }}</span>

                            </div>

                            <div class="form-group">
                                <label for="Status">STATUS</label>
                                <select id="Status" class="form-control" name="Status">
                                    @foreach ($list_sp as $a)
                                        <option value="{{ $a }}" @selected($a == old('Status'))>{{ $a }}
                                            <span class="text-danger">{{ $errors->first('Status') }}</span>
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
