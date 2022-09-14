<?php

namespace App\Http\Controllers;
use App\Models\Fasilitas_kamar;
use Illuminate\Http\Request;

class Fasilitas_KamarController extends Controller
{
    public function index(){ 
        $data = fasilitas_Kamar::all(); 
        return view('administrator.fasilitas_kamar', compact('data')); 
    } 
 
    public function create(){ 
        return view('administrator.tambah_fasilitas_kamar'); 
    } 
 
    public function store(Request $request){ 
        $this->validate($request,[ 
            'kamar_id'=> 'required', 
            'fasilitas_id'=> 'required',
        ]); 
        fasilitas_kamar::create($request->all());
        return redirect('/fasilitas_kamar');
        
    } 
 
    public function tampilan($id){ 
        $data = fasilitas_kamar::find($id); 
        return view('administrator.edit_fasilitas_kamar', compact('data')); 
    } 
 
    public function update(Request $request, $id){ 
        $data = fasilitas_kamar::find($id); 
        $data->update($request->all()); 
        return redirect()->route('fasilitas_kamar'); 
    } 
 
    public function destroy($id){ 
        $data = fasilitas_kamar::find($id); 
        $data->delete(); 
        return redirect()->route('fasilitas_kamar'); 
    }
}
