<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id', 'resultado_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function resultado()
    {
        return $this->belongsTo(Resultado::class);
    }
}
