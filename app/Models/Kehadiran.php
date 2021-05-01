<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $table = "tb_kehadiran";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','Nim','id_anggota','tanggal','kehadiran',
    ];
    public function Anggota(){
        return $this->belongsTo(Anggota::class);
    }
}
