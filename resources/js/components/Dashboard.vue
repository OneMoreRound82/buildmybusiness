// Dashboard.vue

<template>
  <div>
    <div>
        <h1>Hello {{ name }}!</h1>
        <h2>This is your Dashboard.</h2>
    </div>
    <div>
    <p>To view your projects, choose one from the list below</p>
    <li><router-link to='/project/actions'>View Project</router-link></li>

    <ul>
      <li v-for="project in projects"> {{ project.projectName }} </li>
    </ul>
  </div>
</div>
</template>
<script>

import { mapState } from "vuex";

export default {

  
  computed: mapState({ name: "userName" }),

  created() {

      // this.name = this.$store.state.userName;

       this.$store
       .dispatch("fetchProjects")

  },
}
</script>
