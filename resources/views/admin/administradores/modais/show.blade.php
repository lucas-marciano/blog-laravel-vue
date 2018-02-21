<modal idmodal="modal-show" v-bind:titulo="$store.state.item.name">

    <h2 for="name">#@{{$store.state.item.id}}</h2>

    <label for="name">Nome</label>
    <p id="name">@{{$store.state.item.name}}</p>

    <label for="email">E-mail</label>
    <p id="email">@{{$store.state.item.email}}</p>

    <label for="createad_at">Criação</label>
    <p id="createad_at">@{{$store.state.item.created_at}}</p>

    <label for="updated_at">Última Edição</label>
    <p id="updated_at">@{{$store.state.item.updated_at}}</p>
</modal>