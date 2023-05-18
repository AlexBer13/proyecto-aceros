<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Acero extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['tipo_de_calibre', 'cantidad', 'costos'];
}
