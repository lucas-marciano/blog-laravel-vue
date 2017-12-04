<template>
  <div class="container">
      <div class="row">
          <div v-bind:class="defineColum">
              <slot></slot>
          </div>
      </div>
  </div>
</template>

<script>
  export default {
      props:['col'],
      computed: {
        defineColum: function(){
          if(this.col >= 12){
            return "col-md-12 col-md-offset-0";
          }else if(this.col <= 2){
            return "col-md-2 col-md-offset-5";
          }

          if((this.col% 2) == 0){
            return "col-md-" + this.col + " col-md-offset-" + ((12 - parseInt(this.col))/2);
          }else{
            return "col-md-" + (parseInt(this.col) + 1) + " col-md-offset-" + (12 - (parseInt(this.col) + 1))/2;
          }
        }
      }
  }
</script>
