<template>
  <nav v-bind:class="inverseNav">
      <div class="container">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!-- Branding Image -->
              <a class="navbar-brand" v-bind:href="url" v-bind:style="setcolor">
                  {{ titulo }}
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  &nbsp;
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                  <slot></slot>
              </ul>
          </div>
      </div>
  </nav>
</template>

<script>
    export default {
        props: ['titulo', 'url', 'classe', 'white'],
        computed: {
            inverseNav: function () {
                if (this.classe) {
                    return "navbar navbar-collapse navbar-static-top"
                }
                return "navbar navbar-default navbar-static-top";
            },
            setcolor: function () {
                if(this.white)
                    return 'color: white';
                else
                    return 'color: #777';
            }
        }
    }
</script>
