<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orcamento extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'orcamentos';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getNomeClienteAttribute(): String
    {
        return ucfirst($this->attributes['nome_cliente']);
    }

    public function getEnderecoAttribute(): String
    {
        return ucwords($this->attributes['endereco']);
    }

    public function getNavegadorWebAttribute(): String
    {
        return ucwords($this->attributes['navegador_web']);
    }

    public function getLoginWebAttribute(): String
    {
        return ucwords($this->attributes['login_web']);
    }

    public function getPagamentoWebAttribute(): String
    {
        return ucwords($this->attributes['pagamento_web']);
    }

    public function getPlataformaMobileAttribute(): String
    {
        return ucwords($this->attributes['plataforma_mobile']);
    }

    public function getLoginMobileAttribute(): String
    {
        return ucwords($this->attributes['login_mobile']);
    }

    public function getPagamentoMobileAttribute(): String
    {
        return ucwords($this->attributes['pagamento_mobile']);
    }
}
