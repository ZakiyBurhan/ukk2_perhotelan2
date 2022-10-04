<?php

namespace App\Http\Controllers;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function index(){ 
        $data = Kamar::all(); 
        return view('administrator.kamar', compact('data')); 
    } 
 
    public function create(){ 
        return view('administrator.tambah_kamar'); 
    } 
 
    public function store(Request $request){ 
        $this->validate($request,[ 
            'tipe_kamar'=> 'required', 
            'harga'=> 'required',
            'jumblah_kamar'=> 'required',
        ]); 
        kamar::create($request->all());
        return redirect('/kamar');
        
    } 
 
    public function tampilan($id){ 
        $data = kamar::find($id); 
        return view('administrator.edit_kamar', compact('data')); 
    } 
 
    public function update(Request $request, $id){ 
        $data = kamar::find($id); 
        $data->update($request->all()); 
        return redirect()->route('kamar'); 
    } 
 
    public function destroy($id){ 
        $data = kamar::find($id); 
        $data->delete(); 
        return redirect()->route('kamar'); 
    }
}
