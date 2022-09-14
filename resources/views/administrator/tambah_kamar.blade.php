@extends('layouts.maindash')

@section('container')
<div class="container">
    <h1 class="text-center mb-4">Tambah Kamar</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width:90%">
                    <form method="POST" action="/insert_kamar/" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                            <input type="text" name="tipe" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('tipe')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('harga')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah Kamar</label>
                            <input type="number" name="jumlah_kamar" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('jumlah_kamar')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
