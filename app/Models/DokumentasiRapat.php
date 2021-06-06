<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;
    protected $table = 'dokumentasiRapat';
    protected $fillable = ['id_dokumentasi','id_rapat','foto','name','size'];
}
