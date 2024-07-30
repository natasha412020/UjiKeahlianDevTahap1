<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesawat extends Model
{
    use HasFactory;

    protected $table = 'pesawat';

    public $fillable = [
        'code' ,
        'produsen',
        'tahun' ,
        'updated_at',
        'created_at' 
    ];
}
