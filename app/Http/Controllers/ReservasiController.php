<?php

namespace App\Http\Controllers;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index(){ 
        $data = reservasi::all(); 
        return view('resepsionis.reservasi', compact('data')); 
    } 
 
    public function store(Request $request){ 
        $this->validate($request,[ 
            'user_id'=> 'required', 
            'kamar_id'=> 'required',
            'tanggal_checkin'=> 'required',
            'tanggal_checkout'=> 'required',
        ]); 
        reservasi::create($request->all());
        return redirect('/reservasi');
        
    } 
 
    public function tampilan($id){ 
        $data = reservasi::find($id); 
        return view('resepsionis.edit_reservasi', compact('data')); 
    } 
 
    public function update(Request $request, $id){ 
        $data = reservasi::find($id); 
        $data->update($request->all()); 
        return redirect()->route('reservasi'); 
    } 
 
    public function destroy($id){ 
        $data = reservasi::find($id); 
        $data->delete(); 
        return redirect()->route('reservasi'); 
    }
}
