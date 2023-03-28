<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acero extends Model
{
    use HasFactory;
    protected $fillable = ['tipo_de_calibre', 'cantidad', 'costos'];
}
