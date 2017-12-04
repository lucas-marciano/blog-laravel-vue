<template>
	<button v-on:click="preencherForm()" style="display: inline;" type="button" v-bind:class="css || 'btn btn-primary'" 
	data-toggle="modal" v-bind:data-target="'#' + nomemodal">
		{{ acao }}
	</button>
</template>

<script>
    export default {
        props: ['nomemodal', 'acao', 'css', 'item', 'url'],
		methods:{
			preencherForm: function(){
			    axios.get(this.url + this.item.id).then(
			        response => {
                        this.$store.commit('setItem', response.data);
					});
			}
		}
    }
</script>
