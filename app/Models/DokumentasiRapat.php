<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumentasiRapat extends Model
{
    use HasFactory;
    protected $table = 'dokumentasiRapat';
    protected $fillable = ['id_rapat','file'];
}
