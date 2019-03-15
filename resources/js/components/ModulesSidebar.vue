<template>
  <div>
    <h2>Modules:</h2>
    <ul class="Modules-Sidebar">
      <li v-for="module in this.$store.state.modules" :class="{ 'is-active' : selectedModule === module.id }">
		    	<a href="#"  @click="selectModule(module.id)">{{ module.module }}</a></li>

    </ul>
  </div>
</template>

<script>

import { mapState, mapMutations, mapActions, mapGetters } from 'vuex';


export default {
  data: function() {
		return {
			modules:[],
			selectedModule: 1,
			taskTitle: '',


		}
	},

	methods: {
		selectModule(selectedModule){

			this.selectedModule = selectedModule;
			this.$store.state.currentModule = selectedModule;


			// axios.get(`api/modules/${this.$store.state.currentModule}/tasks`).then(response => this.$store
			// 		.dispatch("loadTasks", response.data));
      //
		 	// axios.get(`api/modules/${this.$store.state.currentModule}/tasks`).then(response => this.$root.formatTask(response.data[0].task));


			// CAN I EDIT THE ABOVE CODE SO THE API CALL IS IN THE STORE??

		}
	},

   mounted() {

      // console.log(this.selectedModule);
        this.$store
		    .dispatch("loadModules")

   },
}

</script>
