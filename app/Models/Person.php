<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
    */
    protected $fillable = [
        'name', 
        'cpf',
        'email', 
        'telefone', 
        'address', 
        'city',
        'country', 
        'url_lattes', 
        'orcid', 
        'abbreviation',
        'nationality', 
        'passport', 
        'cep'
    ];
}
