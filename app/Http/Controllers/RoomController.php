<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){ 
        $data = room::all(); 
        return view('room', compact('data')); 
    } 
 
    public function create(){ 
        return view('tambahroom'); 
    } 
 
    public function store(Request $request){ 
        $this->validate($request,[ 
            'user_id'=> 'required', 
            'kamar_id'=> 'required',
            'tanggal_checkin'=> 'required',
            'tanggal_checkout'=> 'required',
        ]); 
        room::create($request->all());
        return redirect('/room');
        
    } 
 
    public function tampilan($id){ 
        $data = room::find($id); 
        return view('edit_room', compact('data')); 
    } 
 
    public function update(Request $request, $id){ 
        $data = room::find($id); 
        $data->update($request->all()); 
        return redirect()->route('room'); 
    } 
 
    public function destroy($id){ 
        $data = room::find($id); 
        $data->delete(); 
        return redirect()->route('room'); 
    }
}
