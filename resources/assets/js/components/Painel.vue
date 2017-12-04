<template>
  <div v-bind:class="changeColor">
    <div class="panel-heading"><h3>{{title}}</h3></div>
    <div class="panel-body">
      <slot></slot>
    </div>
  </div>
</template>

<script>
    export default {
        props:['title', 'color'],
        computed: {
          changeColor: function(){
            return "panel " + (this.color || "panel-default");
          }
        }
    }
</script>
