<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    // protected $table = 'lokasis';


    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_lokasi',

    ];
}