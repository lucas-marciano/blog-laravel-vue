<modal idmodal="modal-adicionar" titulo="Novo usuário">
	<formulario id="form-add" css="" acao="{{route('usuarios.store')}}" metodo="post">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="name">Nome *</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{old('name')}}">
		</div>

		<div class="form-group">
			<label for="email">E-mail *</label>
			<input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
		</div>

		<div class="form-group">
			<label for="password">Senha *</label>
			<input type="password" class="form-control" id="password" name="password" value="">
		</div>

	</formulario>
	<span slot="botoes">
		<button form="form-add" type="submit" class="btn btn-primary">Salvar</button>
	</span>
</modal>