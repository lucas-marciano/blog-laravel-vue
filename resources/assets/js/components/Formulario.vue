<template>
    <form v-bind:class="css" v-bind:action="acao" v-bind:method="defineMethod" v-bind:enctype="anexo">
        <input v-if="token" type="hidden" name="_token" v-bind:value="token">
        <input v-if="alterametodo" type="hidden" name="_method" v-bind:value="alterametodo">
        <slot></slot>
    </form>
</template>

<script>
    export default {
        props: ['css', 'acao', 'metodo', 'anexo', 'token'],
        data: function(){
            return {
                alterametodo: ''
            }
        },
        computed: {
            defineMethod: function(){
                if(this.metodo.toLowerCase() === "post" || this.metodo.toLowerCase() === "get"){
                    return this.metodo.toLowerCase();
                }

                if(this.metodo.toLowerCase() === "put"){
                    this.alterametodo = "put";
                }


                if(this.metodo.toLowerCase() === "delete"){
                    this.alterametodo = "delete";
                }

                return "post";
            }
        }
    }
</script>
