<?php

namespace App\Http\Controllers;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index(){ 
        $data = Fasilitas::all(); 
        return view('administrator.fasilitas', compact('data')); 
    } 
 
    public function create(){ 
        return view('administrator.tambah_Fasilitas'); 
    } 
 
    public function store(Request $request){ 
        $this->validate($request,[ 
            'nama'=> 'required', 
            'kategori'=> 'required',
        ]); 
        fasilitas::create($request->all());
        return redirect('/fasilitas');
        
    } 
 
    public function tampilan($id){ 
        $data = fasilitas::find($id); 
        return view('administrator.edit_fasilitas', compact('data')); 
    } 
 
    public function update(Request $request, $id){ 
        $data = fasilitas::find($id); 
        $data->update($request->all()); 
        return redirect()->route('fasilitas'); 
    } 
 
    public function destroy($id){ 
        $data = fasilitas::find($id); 
        $data->delete(); 
        return redirect()->route('fasilitas'); 
    }
}
