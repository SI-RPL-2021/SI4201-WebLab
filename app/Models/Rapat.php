<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    use HasFactory;
    protected $table = "tb_rapat";
    protected $fillable = [
        'nama_rapat',
        'pemohon',
        'tgl_rapat',
        'jam_rapat',
        'link',
        'status_aproval',
    ];
}
