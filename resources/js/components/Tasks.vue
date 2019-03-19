// Tasks.vue

<template>
    <div>
        <h1>Your current module is {{ moduleName }}</h1>

        <li v-for="task in tasks">{{ task.task }}</li>
    </div>
</template>


<script>

import { mapState } from "vuex";

export default {

  computed: mapState({

    module: "currentModule",
    moduleName: "currentModuleName",
    projects: "projects",
    projectId: "currentProjectId",
    projectName: "currentProjectName",
    tasks: "tasks",


  }),

}

</script>
