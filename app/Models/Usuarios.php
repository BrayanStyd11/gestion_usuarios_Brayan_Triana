<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    /**
     * Se deshabilita el timestaps para evitar errores de crud
     */
    public $timestamps = false;

    protected $table = 'usuarios';
    protected $guarded = ['id'];
    protected $fillable = ['nombre','email'];			
}
