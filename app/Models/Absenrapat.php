<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absenrapat extends Model
{
    use HasFactory;
    protected $table = "absenrapat";
    protected $fillable = [
        'id_rapat',
        'nim',
        'status_validasi',
    ];
}