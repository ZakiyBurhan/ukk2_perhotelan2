<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'tipe_kamar',
        'harga',
        'jumblah_kamar',
    ];

    public Function room(){
        return $this->hasMany(Room::class);
    }
}
