<?php

namespace agp\mod_adm\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Nome da Tabela que o Eloquent vai pesquisar
    protected $table = 'adm_pessoa';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['nome'];
}
