<template>
    <div v-bind:class="changeClass">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props:['classe'],
        computed: {
            changeClass: function(){
                return "alert " + (this.classe || "alert-info") + " alert-dismissable fade in";
            }
        }
    }
</script>
