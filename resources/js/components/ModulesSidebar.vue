<template>
  <div>
    <h2>Modules:</h2>
    <ul class="Modules-Sidebar">

      <!-- <li v-for="module in this.$store.state.modules" :class="{ 'is-active' : selectedModule === module.id }"> -->
		    	<!-- <a href="#"  ></a></li> -->

          <!-- <li v-for="module in this.$store.state.modules" :class="{ 'is-active' : selectedModule === module.id }"> -->
              <!-- <li v-for="(module, id) in modules" :key="id">
            <router-link @click="selectModule(module.id, module.module)" :to="{ name: 'module', params: { module:module.id }}"> {{ module.module }} </router-link>
          </li> -->

          <li v-for="(module, id) in modules" :key="id">
        <router-link @click.native="selectModule(module.id, module.module)" :to="{ name: 'module', params: { module:module.id }}"> {{ module.module }} </router-link>
      </li>


    </ul>
  </div>
</template>

<script>

import { mapState, mapMutations, mapActions, mapGetters } from 'vuex';


export default {

  computed: mapState({

    modules: "currentModule",
    moduleName: "currentModuleName",
    modules: "modules",


  }),

  data: function() {
		return {
			// modules:[],
			selectedModule: 1,
			taskTitle: '',

		}
	},

	methods: {
		selectModule(moduleId, moduleName ){


      const $moduleDetails = { moduleId, moduleName }

      this.$store
        .dispatch("getTasks", $moduleDetails);
		}
	},

   created() {

        this.$store
		    .dispatch("loadModules")

   },
}

</script>
