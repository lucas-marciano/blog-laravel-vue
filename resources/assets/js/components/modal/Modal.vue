<template>
    <!-- Modal -->
	<div class="modal fade" v-bind:id="idmodal" tabindex="-1" role="dialog" v-bind:aria-labelledby="idmodal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			    <div class="modal-header">
				    <h4 class="modal-title" style="display: inline;">{{titulo}}</h4>
				    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				        <span aria-hidden="true">&times;</span>
				    </button>
			    </div>
			    <div class="modal-body">
			      	<slot></slot>
			  	</div>
				<div class="modal-footer">
					<slot name="botoes"></slot>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        props:['idmodal', 'titulo']
    }
</script>
