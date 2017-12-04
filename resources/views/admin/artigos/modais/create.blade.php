<modal idmodal="modal-adicionar" titulo="Novo artigo">
	<formulario id="form-add" css="" acao="{{route('artigos.store')}}" metodo="post">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="titulo">Título *</label>
			<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{old('titulo')}}">
		</div>

		<div class="form-group">
			<label for="data_publicacao">Data de publicação *</label>
			<input type="date" class="form-control" id="data_publicacao" name="data_publicacao" value="{{old('data_publicacao')}}">
		</div>

		<div class="form-group">
			<label for="time_publicacao">Hora da publicação *</label>
			<input type="time" class="form-control" id="time_publicacao" name="time_publicacao" value="{{old('time_publicacao')}}">
		</div>

		<div class="form-group">
			<label for="descricao">Descrição *</label>
			<input type="text" class="form-control" id="descricao" name="descricao" value="{{old('descricao')}}">
		</div>

		<div class="form-group">
			<label for="conteudo">Conteúdo *</label>
			<textarea style="resize: none;" class="form-control" id="conteudo" name="conteudo">{{old('conteudo')}}</textarea>
		</div>

	</formulario>
	<span slot="botoes">
		<button form="form-add" type="submit" class="btn btn-primary">Salvar novo Artigo</button>
	</span>
</modal>