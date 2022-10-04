@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class="text-center mb-4">Tambah room</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width:90%">
                    <form method="POST" action="/insert_room/" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">nama</label> 
                            <input type="text" name="user_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                            @error('user_id') 
                            <div class="text-danger"> 
                                {{ $message }} 
                            </div> 
                            @enderror 
                        </div> 
     
                       <div class="mb-3"> 
                            <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label> 
                            <input type="text" name="tipe_kamar"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                            @error('tipe_kamar') 
                            <div class="text-danger"> 
                                {{ $message }} 
                            </div> 
                            @enderror 
                        </div> 

                        <div class="mb-3"> 
                             <label for="exampleInputEmail1" class="form-label">jumblah kamar</label> 
                             <input type="text" name="jumblah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                             @error('jumblah') 
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
    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
