<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumentasiPelatihan extends Model
{
    use HasFactory;
    protected $table = 'dokumentasiPelatihan';
    protected $fillable = ['id_dokumentasi','id_pelatihan','foto','name','size'];
}
