@extends('layouts.auth')

@section('content')
    <pagina col="12">
        <div class="row ar_in box-shadow">
            <h2>{!! $artigo->titulo !!}</h2>
            <small>{!! $artigo->user->name . ' | ' . date('d/m/Y', strtotime($artigo->data_publicacao)) !!}</small>
            <h4>{!! $artigo->descricao !!}</h4>
            <p>{!! $artigo->conteudo !!}</p>
        </div>
    </pagina>
@endsection
