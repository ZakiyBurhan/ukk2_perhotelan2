@extends('layouts.maindash')

@section('container')
<div class="container">
    <h1 class="text-center mb-4">Tambah Data Kelas</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width:90%">
                    <form method="POST" action="/insert_fasilitas_kamar/" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                            <input type="text" name="kamar_id" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('kamar_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <input type="text" name="fasilitas_id" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('fasilitas_id')
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
