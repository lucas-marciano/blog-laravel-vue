<modal idmodal="modal-edit" titulo="Editar usuário">
	<formulario id="form-edit" css="" v-bind:acao="'/admin/usuarios/' + $store.state.item.id" metodo="put" anexo="multipart/form-data">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="name">Nome *</label>
			<input type="text" class="form-control" id="name" name="name"
				   placeholder="Nome" v-model="$store.state.item.name">
		</div>
		<div class="form-group">
			<label for="email">E-mail *</label>
			<input type="email" class="form-control" name="email" id="email"
				   placeholder="E-mail" v-model="$store.state.item.email">
		</div>

		<div class="form-group">
			<label for="password">Senha</label>
			<input type="password" class="form-control" id="password"
				   name="password" placeholder="Senha">
		</div>

	</formulario>

	<span slot="botoes">
		<button form="form-edit" type="submit" class="btn btn-primary">Salvar Alterações</button>
	</span>
	
</modal>