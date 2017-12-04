<modal idmodal="modal-edit" titulo="Editar artigo">
	<formulario id="form-edit" css="" v-bind:acao="'/admin/artigos/' + $store.state.item.id" metodo="put" anexo="multipart/form-data">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" class="form-control" id="titulo" name="titulo"
				   placeholder="Titulo" v-model="$store.state.item.titulo">
		</div>
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<input type="text" class="form-control" name="descricao" id="descricao"
				   placeholder="Descrição" v-model="$store.state.item.descricao">
		</div>

		<div class="form-group">
			<label for="data_publicacao">Data de publicacao</label>
			<input type="date" class="form-control" id="data_publicacao"
				   name="data_publicacao" placeholder="Data de publicacao"
				   v-model="$store.state.item.data_publicacao">
		</div>

		<div class="form-group">
			<label for="time_publicacao">Hora da publicacao</label>
			<input type="time" class="form-control" id="time_publicacao"
				   name="time_publicacao" placeholder="Hora da publicação"
				   v-model="$store.state.item.time_publicacao">
		</div>

		<div class="form-group">
			<label for="conteudo">Conteúdo</label>
			<textarea class="form-control" id="conteudo" name="conteudo" placeholder="Conteúdo"
					  v-model="$store.state.item.conteudo"></textarea>
		</div>

	</formulario>

	<span slot="botoes">
		<button form="form-edit" type="submit" class="btn btn-primary">Salvar Alterações</button>
	</span>
	
</modal>