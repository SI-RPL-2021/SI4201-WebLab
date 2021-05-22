<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absenpelatihan extends Model
{
    use HasFactory;
    protected $table = "absenpelatihan";
    protected $fillable = [
        'id_pelatihan',
        'nim',
        'status_validasi',
    ];
}
