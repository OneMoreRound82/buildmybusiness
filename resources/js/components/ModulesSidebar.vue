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

      this.$store
        .dispatch("getTasks", selectedModule);
		}
	},

   created() {

        this.$store
		    .dispatch("loadModules")

   },
}

</script>
