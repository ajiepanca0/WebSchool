<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlasanAlumni extends Model
{
    use HasFactory;
    protected $table = 'ulasan_alumnis';
    protected $fillable = [
        'nama',
        'email',
        'ulasan',
        'foto',
        'pekerjaan',
        'status',
        'created_at',
        'updated_at',
    ];
}
