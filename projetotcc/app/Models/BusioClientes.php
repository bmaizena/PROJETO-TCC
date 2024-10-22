<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusioClientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'dt_nasc',
        'email',
        'telefone',
        'endereco',
        'cpf',
        'senha'
    ];

    protected $hidden = [
        'senha'
    ];

   
    protected function casts(): array
    {
        return [
            'senha' => 'hashed',
        ];
    }
}