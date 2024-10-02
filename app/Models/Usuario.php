<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','victorias','empates','derrotas'];

    public function juegos()
    {
        return $this->hasMany(Juego::class);
    }
}
