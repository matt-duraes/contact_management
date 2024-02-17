<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod',
        'nome',
        'email',
        'contato'
    ];

    protected static function boot() 
    {
        parent::boot();
        static::creating(function (Contato $contato) {
            $contato->cod = 'COD'.uniqid();
        });
    }
}
