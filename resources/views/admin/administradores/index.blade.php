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

	<painel title="Administradores">

		<breadcrumb v-bind:lista={{$breadcrumbs}}></breadcrumb>

		<linkmodal nomemodal="modal-adicionar" acao="Novo administrador" css="btn btn-info"></linkmodal>

		<tabela-lista criar="#criar" editar="/admin/administradores/" detalhe="/admin/administradores/"
					  token="{{ csrf_token() }}" v-bind:titulos="['#', 'Nome', 'E-mail']"
		 v-bind:itens="{{json_encode($lista)}}" ordem="asc" ordemcol="2" modal="sim"></tabela-lista>

		<div align="center" class="">
			{{$lista}}
		</div>
	</painel>
</pagina>

@include('admin.administradores.modais.create')
@include('admin.administradores.modais.show')
@include('admin.administradores.modais.edit')

@endsection