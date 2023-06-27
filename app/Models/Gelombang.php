<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gelombang extends Model
{
    use HasFactory;
    protected $table = 'gelombangs';
    protected $fillable = [
        'nama_gelombang',
        'batas_gelombang',
        'nominal1',
        'nominal2',
        'created_at',
        'updated_at',
    ];
}
