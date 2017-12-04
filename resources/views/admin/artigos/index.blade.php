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

	<painel title="Artigos">

		<breadcrumb v-bind:lista={{$breadcrumbs}}></breadcrumb>

		<linkmodal nomemodal="modal-adicionar" acao="Novo artigo" css="btn btn-info"></linkmodal>

		<tabela-lista criar="#criar" editar="/admin/artigos/" deletar="/admin/artigos/" detalhe="/admin/artigos/"
					  token="{{ csrf_token() }}" v-bind:titulos="['#', 'Título', 'Descrição', 'Data', 'Hora']"
		 v-bind:itens="{{json_encode($artigos)}}" ordem="asc" ordemcol="2" modal="sim"></tabela-lista>

		<div align="center" class="">
			{{$artigos}}
		</div>
	</painel>
</pagina>

@include('admin.artigos.modais.create')
@include('admin.artigos.modais.show')
@include('admin.artigos.modais.edit')

@endsection