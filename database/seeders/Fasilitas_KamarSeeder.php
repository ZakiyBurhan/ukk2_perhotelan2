<?php 
 
namespace Database\Seeders; 
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
 
class Fasilitas_KamarSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     * 
     * @return void 
     */ 
    public function run() 
    { 
        DB::table('fasilitas_kamars')->insert([ 
            'kamar_id' => 'XI RPL 2', 
            'fasilitas_id' => 'Agus Diana S.pd'
        ]); 
    } 
}