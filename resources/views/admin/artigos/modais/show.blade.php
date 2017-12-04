<modal idmodal="modal-show" v-bind:titulo="$store.state.item.titulo">
	<h2>@{{$store.state.item.id}}</h2>

    <label for="titulo">Titulo</label>
    <p id="titulo">@{{$store.state.item.titulo}}</p>

    <label for="descricao">Descrição</label>
    <p id="descricao">@{{$store.state.item.descricao}}</p>

    <label for="conteudo">Conteúdo</label>
    <p id="conteudo">@{{$store.state.item.conteudo}}</p>

    <label for="data_publicacao">Data de publicação</label>
    <p id="data_publicacao">@{{$store.state.item.data_publicacao}}</p>

    <label for="time_publicacao">Hora da publicação</label>
    <p id="time_publicacao">@{{$store.state.item.time_publicacao}}</p>
</modal>