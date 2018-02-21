@extends('layouts.app')

@section('content')
    <pagina col="12">
        <painel title="Dashboard">
            <breadcrumb v-bind:lista={{$breadcrumbs}}></breadcrumb>

            <div class="row">
                <div class="col-lg-3">
                    <box title="Usuários" url="{{ route('usuarios.index') }}" color="bg-purple" icon="fa-users">
                        {{$cards['usuarios']}}
                    </box>
                </div>

                <div class="col-lg-3">
                    <box title="Autores" url="{{ route('autores.index') }}" color="bg-green" icon="fa-user">
                        {{$cards['autores']}}
                    </box>
                </div>

                <div class="col-lg-3">
                    <box title="Administradores" url="{{ route('administradores.index') }}"
                         color="bg-blue" icon="fa-user-secret">
                        {{$cards['administradores'] }}
                    </box>
                </div>

                <div class="col-lg-3">
                    <box title="Artigos" url="{{ route('artigos.index') }}" color="bg-orange" icon="fa fa-newspaper-o">
                        {{$cards['artigos']}}
                    </box>
                </div>
            </div>
        </painel>
    </pagina>
@endsection
