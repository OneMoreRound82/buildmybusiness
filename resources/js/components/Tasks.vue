// Tasks.vue

<template>
    <div>
        <h1>This is your Task Sheet for {{ projectName }}</h1>
        <li v-for="task in tasks">{{ task.task }}</li>
    </div>
</template>


<script>

import { mapState } from "vuex";

export default {

  computed: mapState({

    module: "currentModule",
    projects: "projects",
    projectId: "currentProjectId",
    projectName: "currentProjectName",
    tasks: "tasks"

  }),

}

</script>
