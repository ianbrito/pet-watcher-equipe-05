<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'funcionario';
    protected $cascadeDeletes = ['users'];
    protected $fillable = ['nome', 'cpf', 'endereco', 'telefone', 'email'];

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
