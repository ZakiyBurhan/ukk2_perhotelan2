@extends('layouts.maindash')

@section('container')
<div class="container pt-2">
    <div class="judul mb-2">
        <h1 class="text-center">kamar</h1>
    </div>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User</th>
                <th scope="col">Kamar</th>
                <th scope="col">tanggal_checkin</th>
                <th scope="col">tanggal_checkout</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $row->user_id }}</td>
                <td>{{ $row->kamar_id }}</td>
                <td>{{ $row->tanggal_checkin }}</td>
                <td>{{ $row->tanggal_checkout }}</td>
                <td class="d-flex">
                    <form action="/delete_resrvasi/{{ $row->id }}" method="POST" style="margin-right:20px">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger me-4">Delete</button>
                    </form>
                    <a type="button" href="/tampilan_reservasi/{{ $row->id }}"
                        class="btn btn-warning mr-2">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
