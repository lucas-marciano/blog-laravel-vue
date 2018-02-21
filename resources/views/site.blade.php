@extends('layouts.auth')

@section('content')
    <pagina col="12">
        <div class="row">
            @foreach($lista as $i)
                <artigo titulo="{{$i->titulo}}"
                        descricao="{{$i->descricao}}"
                        link="{{route('artigo', [$i->id, str_slug($i->titulo)])}}"
                        image="http://via.placeholder.com/350x200"
                        data="{{$i->data_publicacao}}"
                        autor="{{$i->user_id}}"
                        sm="6"
                        md="3">
                </artigo>
            @endforeach
        </div>

        <div align="center" class="">{{$lista}}</div>
    </pagina>
@endsection
