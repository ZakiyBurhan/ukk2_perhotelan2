@extends('layouts.main')

@section('container')
<div class="room">
    <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center mt-2">Make A Reservasition</h1>
        <a type="button" href="/tambah_room" class="btn btn-success">Tambah +</a>
    <div class="container1" style="display: flex">
        <div class="container2" style="width: 100%;">
            <div class="col-sm-6">
                <label class="px col-sm-5 col-from-label">Number Of room</label>
                <input type="text" class="form-control" placeholder="Number room">
            </div>
    
            <div class="col-sm-6">
                <label class="col-sm-3 col-from-label">Name</label>
                <input type="text" class="form-control" placeholder="Name">
            </div>
    
            <div class="col-sm-6">
                <label class="col-sm-5 col-from-label">Phone Number</label>
                <input type="number" class="form-control" placeholder="+62">
            </div>
        </div>

        <div class="container3" style="display: flex">
            <div class="container9" style="width: 600px">
            <div class="col-sm-6">
                <label class="col-sm-20 col-from-label">Check-in date</label>
                <input type="date" class="form-control" placeholder="+62">
            </div>
    
            <div class="col-sm-6">
                <label class="col-sm-15 col-from-label">Check-out date</label>
                <input type="date" class="form-control" placeholder="+62">
            </div>
    
            <div class="col-sm-6">
                <label class="col-sm-5 col-from-label">payment</label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <br>
            @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $row->user_id }}</td>
                <td>{{ $row->kamar_id }}</td>
                <td>{{ $row->tanggal_checkin }}</td>
                <td>{{ $row->tanggal_checkout }}</td>
                <td>{{ $row->payment }}</td>
                <td class="d-flex">
                    <form action="/delete_room/{{ $row->id }}" method="POST" style="margin-right:20px">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger me-4">Delete</button>
                    </form>
                    <a type="button" href="/tampilan_room{{ $row->id }}"
                        class="btn btn-warning mr-2">Edit</a>
                </td>
            </tr>
            @endforeach
    </div>
</div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
@endsection
