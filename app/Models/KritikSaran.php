<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    use HasFactory;
    protected $table = 'kritik_sarans';
    protected $fillable = [
        'nama',
        'email',
        'kritiksaran',
        'balasan',
        'created_at',
        'updated_at',
    ];
}
