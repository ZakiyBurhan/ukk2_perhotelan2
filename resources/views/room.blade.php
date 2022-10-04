@extends('layouts.main')

@section('container')
<div class="container pt-2">
    <div class="judul mb-2">
        <h1 class="text-center">kamar</h1>
        <!-- {{-- <a type="button" href="/tambah_room" class="btn btn-success">Tambah +</a> --}} -->
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">tipe kamar</th>
                <th scope="col">Jumblah Kamar</th>
                <th scope="col">Tanggal Chekin</th>
                <th scope="col">Tanggal Chekout</th>
            </tr>
        </thead>
        <tbody>
            <br>
            @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $row->user_id }}</td>
                <td>{{ $row->tipe_kamar }}</td>
                <td>{{ $row->jumblah }}</td>
                <td>{{ $row->tanggal_checkin }}</td>
                <td>{{ $row->tanggal_checkout }}</td>
                <!-- {{-- <td class="d-flex"> --}}
                    {{-- <form action="/delete_room/{{ $row->id }}" method="POST" style="margin-right:20px">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger me-4">Delete</button>
                    </form>
                    <a type="button" href="/tampilan_room{{ $row->id }}"
                        class="btn btn-warning mr-2">Edit</a> --}}
                {{-- </td>
            </tr> --}} -->
            @endforeach
    <!-- {{-- </div>
</div>
</div> --}} -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
@endsection
