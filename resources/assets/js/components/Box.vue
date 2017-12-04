<template>
  <div v-bind:class="changeColor">
    <div class="inner">
      <h3><slot></slot></h3>
      <p>{{title}}</p>
    </div>
    <div class="icon">
      <i v-bind:class="changeIcon"></i>
    </div>
    <a v-bind:href="url" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</template>

<script>
  export default {
    props:['title', 'color', 'url', 'icon'],
    computed: {
      changeColor: function(){
        return "small-box " + (this.color || "bg-gray");
      },
      changeIcon: function(){
        return "fa " + (this.icon || "fa-users");
      }
    }
  }
</script>
