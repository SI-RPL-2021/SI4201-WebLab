<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'tb_anggota';
    protected $fillable = ['nama','nim','kelas','divisi','study_group','email','password','akses'];
}
