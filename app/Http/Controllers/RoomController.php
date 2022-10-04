<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function index(){ 
        $data = Room::all(); 
        return view('room', compact('data')); 
    } 
 
    public function create(){ 
        return view('tambahroom'); 
    } 
 
    public function store(Request $request){ 
        $this->validate($request,[ 
            'user_id'=> 'required', 
            'tipe_kamar'=> 'required',
            'jumblah'=> 'required',
            'tanggal_checkin'=> 'required',
            'tanggal_checkout'=> 'required',
        ]); 
        Room::create($request->all());
        return redirect('/room');
        
    } 
 
    public function tampilan($id){ 
        $data = Room::find($id); 
        return view('edit_room', compact('data')); 
    } 
 
    public function update(Request $request, $id){ 
        $data = Room::find($id); 
        $data->update($request->all()); 
        return redirect()->route('room'); 
    } 
 
    public function destroy($id){ 
        $data = Room::find($id); 
        $data->delete(); 
        return redirect()->route('room'); 
    }
}
