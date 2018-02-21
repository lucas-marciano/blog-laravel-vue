<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artigo extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'titulo',
        'descricao',
        'conteudo',
        'data_publicacao',
        'time_publicacao'
    ];

    /* Db relates */

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /* Methods */

    public static function listarArtigos($itens = 10)
    {
        $lista = Artigo::select('id', 'titulo', 'descricao', 'user_id', 'data_publicacao', 'time_publicacao')->paginate($itens);

        foreach ($lista as $item){
            $item->user_id = $item->user->name;
            unset($item->user);
        }

        return $lista;
    }

    public static function listar($qtd)
    {
        $lista = Artigo::select('id', 'titulo', 'descricao', 'user_id', 'data_publicacao')
            ->where('data_publicacao', '<=', date('Y-m-d'))
            ->orderBy('data_publicacao', 'desc')
            ->paginate($qtd);

        foreach ($lista as $item){
            $item->user_id = $item->user->name;
            unset($item->user);
        }

        return $lista;
    }
}
