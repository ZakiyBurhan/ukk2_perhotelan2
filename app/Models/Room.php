<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tipe_kamar',
        'jumblah',
        'tanggal_checkin',
        'tanggal_checkout',
    ];

    public function kamar(){
        return $this->hasMany(Kamar::class);
    }
}