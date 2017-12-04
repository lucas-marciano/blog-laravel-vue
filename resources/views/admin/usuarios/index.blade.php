@extends('layouts.app') @section('content')
<pagina col="12">
	@if($errors->all())
		<alerta classe="alert-danger">
			<ul>
				@foreach($errors->all() as $e)
					<li>{{$e}}</li>
				@endforeach
			</ul>
		</alerta>
	@endif

	<painel title="Usuários">

		<breadcrumb v-bind:lista={{$breadcrumbs}}></breadcrumb>

		<linkmodal nomemodal="modal-adicionar" acao="Novo usuário" css="btn btn-info"></linkmodal>

		<tabela-lista criar="#criar" editar="/admin/usuarios/" deletar="/admin/usuarios/" detalhe="/admin/usuarios/"
					  token="{{ csrf_token() }}" v-bind:titulos="['#', 'Nome', 'E-mail']"
		 v-bind:itens="{{json_encode($lista)}}" ordem="asc" ordemcol="2" modal="sim"></tabela-lista>

		<div align="center" class="">
			{{$lista}}
		</div>
	</painel>
</pagina>

@include('admin.usuarios.modais.create')
@include('admin.usuarios.modais.show')
@include('admin.usuarios.modais.edit')

@endsection