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

	<painel title="Autores">

		<breadcrumb v-bind:lista={{$breadcrumbs}}></breadcrumb>

		<linkmodal nomemodal="modal-adicionar" acao="Novo autor" css="btn btn-info"></linkmodal>

		<tabela-lista criar="#criar" editar="/admin/autores/" detalhe="/admin/autores/"
					  token="{{ csrf_token() }}" v-bind:titulos="['#', 'Nome', 'E-mail']"
		 v-bind:itens="{{json_encode($lista)}}" ordem="asc" ordemcol="2" modal="sim"></tabela-lista>

		<div align="center" class="">
			{{$lista}}
		</div>
	</painel>
</pagina>

@include('admin.autores.modais.create')
@include('admin.autores.modais.show')
@include('admin.autores.modais.edit')

@endsection