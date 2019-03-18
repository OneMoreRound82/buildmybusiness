// Dashboard.vue

<template>
  <div>
    <div>
        <h1>Hello {{ name }}!</h1>
        <h2>This is your Dashboard.</h2>
    </div>
    <div>
    <p>To view your projects, choose one from the list below:</p>
    <ul>
        <li v-for="(project, id) in projects" :key="id">
          <router-link @click.native="setProject(project.id, project.project_name)" :to="{ name: 'actions', params: { id:project.id ,  module:module }}"> {{ project.project_name }} </router-link>
        </li>
    </ul>
  </div>
</div>
</template>
<script>

import { mapState } from "vuex";

export default {


  computed: mapState({
    name: "userName",
    projects: "projects",
    module: "currentModule"
  }),

  created() {

     this.$store
       .dispatch("fetchProjects")

  },

  methods: {
    setProject(projectId, projectName){

     const $projectDetails = { projectId, projectName }

      this.$store
        .dispatch("setProject", $projectDetails);

        this.$store
          .dispatch("getTasks", this.module);

    }
  }
}
</script>
