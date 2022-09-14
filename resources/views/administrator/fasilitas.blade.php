@extends('layouts.maindash')

@section('container')
<div class="container pt-2">
    <div class="judul mb-2">
        <h1 class="text-center">Fasilitas kamar</h1>
        <a type="button" href="/tambah_fasilitas" class="btn btn-success">Tambah +</a>
    </div>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->kategori }}</td>
                <td class="d-flex">
                    <form action="/delete_fasilitas/{{ $row->id }}" method="POST" style="margin-right:20px">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger me-4">Delete</button>
                    </form>
                    <a type="button" href="/tampilan_fasilitas/{{ $row->id }}"
                        class="btn btn-warning mr-2">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
