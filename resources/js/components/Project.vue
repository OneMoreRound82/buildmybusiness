// Project.vue

<template>

  <div>
    <header>
      <h1>{{ projectName }}</h1>
    </header>
    <div class="row">
      <div class="col-sm-2 col-with-right-border">
          <modules-sidebar></modules-sidebar>
      </div>

          <div class="col">
            <router-view></router-view>
          </div>


      </div>
    </div>

  </div>
</template>

<script>

import { mapState } from "vuex";

import ModulesSidebar from './ModulesSidebar.vue';


export default {

  computed: mapState({

    projectName: "currentProjectName",

  }),


  components:{
    'modules-sidebar': ModulesSidebar,
  },


}

</script>
