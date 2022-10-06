@extends('layouts.main')

@section('container')

<div class="container5">
    <div class="d">
        <center>
            <h1>Pilihan Kamar</h1>
        </center>
    </div>
    <div class="profile-container" style="display: flex; justify-content: space-around">
        <div class="card" style="width: 400px">
            <img src="/assets/kamar.jpg" alt="" class="card-img">
            <div class="card-body">
                <h2>Superior Room</h2>
                <div class="icon">
                    <a type="button" href="/tambah_room" class="btn btn-danger">Pesan </a>
                </div>
            </div>

        </div>
        <div class="card" style="width: 400px">
            <img src="/assets/kamar.jpg" alt="" class="card-img">
            <div class="card-body">
                <h2>Single Room</h2>
                <div class="icon">
                    <a type="button" href="/tambah_room" class="btn btn-danger">Pesan </a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 400px">
            <img src="/assets/kamar.jpg" alt="" class="card-img">
            <div class="card-body">
                <h2>Deluxe Room</h2>
                <div class="icon">
                    <a type="button" href="/tambah_room" class="btn btn-danger">Pesan </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container5">
    <div class="d">
        <br>
    </div>
    <div class="profile-container" style="display: flex; justify-content: space-around">
        <div class="card" style="width: 400px">
            <img src="/assets/kamar.jpg" alt="" class="card-img">
            <div class="card-body">
                <h2>Junior Suite Room</h2>
                <div class="icon">
                    <a type="button" href="/tambah_room" class="btn btn-danger">Pesan </a>
                </div>
            </div>

        </div>
        <div class="card" style="width: 400px">
            <img src="/assets/kamar.jpg" alt="" class="card-img">
            <div class="card-body">
                <h2>Suite Room</h2>
                <div class="icon">
                    <a type="button" href="/tambah_room" class="btn btn-danger">Pesan </a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 400px">
            <img src="/assets/kamar.jpg" alt="" class="card-img">
            <div class="card-body">
                <h2>Presidential Suite</h2>
                <div class="icon">
                    <a type="button" href="/tambah_room" class="btn btn-danger">Pesan </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
@endsection

