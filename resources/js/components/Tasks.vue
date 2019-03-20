// Tasks.vue

<template>
    <div>
        <h1>Your current module is {{ moduleName }}</h1>

        <li v-for="(task, id) in tasks" :key="id">

            	<a href="#" @click="setActionsURL(task.url)" >{{ task.task }}</a></li>
        </li>

        <!-- <h2> {{ taskURL }} </h2> -->

        <div>
          <component :is="taskComponent" />
        </div>
    </div>
</template>


<script>


import Actions from './Actions.vue';

import { mapState, mapGetters } from "vuex";

export default {

  computed:
    {
      ...mapGetters([
        'SelectedTaskURL',
      ]),

      ...mapState({

        module: "currentModule",
        moduleName: "currentModuleName",
        projects: "projects",
        projectId: "currentProjectId",
        projectName: "currentProjectName",
        tasks: "tasks",
        // taskURL: "taskURL",

        taskComponent() {

          console.log(`./ProductServiceAnalysis/${this.$store.getters['SelectedTaskURL']}.vue`)
         return () => import(`./ProductServiceAnalysis/${this.$store.getters['SelectedTaskURL']}.vue`)
         }

      }),



},




  methods:{
			setActionsURL(selectedTask){

        this.$store
          .dispatch("setActionsURL", selectedTask);
			},
    },

}

</script>
