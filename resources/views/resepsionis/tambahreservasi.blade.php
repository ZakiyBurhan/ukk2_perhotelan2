@extends('layouts.maindash')

@section('container')
<div class="container">
    <h1 class="text-center mb-4">Tambah Kamar</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width:90%">
                    <form method="POST" action="/insert_reservasi/" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">User</label> 
                            <input type="text" name="user_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                            @error('user_id') 
                            <div class="text-danger"> 
                                {{ $message }} 
                            </div> 
                            @enderror 
                        </div> 
     
                       <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Kamar</label> 
                            <input type="text" name="kamar_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                            @error('kamar_id') 
                            <div class="text-danger"> 
                                {{ $message }} 
                            </div> 
                            @enderror 
                        </div> 
    
                       <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Tanggal Checkin</label> 
                            <input type="date" name="tanggal_checkin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                            @error('tanggal_checkin') 
                            <div class="text-danger"> 
                                {{ $message }} 
                            </div> 
                            @enderror 
                        </div> 
    
                       <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Tanggal Checkout</label> 
                            <input type="date" name="tanggal_checkout" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                            @error('tanggal_checkout') 
                            <div class="text-danger"> 
                                {{ $message }} 
                            </div> 
                            @enderror 
                        </div> 
    
                       <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">payment</label> 
                            <input type="text" name="payment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                            @error('payment') 
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
