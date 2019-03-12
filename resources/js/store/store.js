import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios'

Vue.use(Vuex);
axios.defaults.baseURL = 'http://buildmybusiness.test/api'

Vue.config.devtools = true;


export const store = new Vuex.Store({
	state:{
		token: localStorage.getItem('access_token') || null,
		requiredTask: 'This is my current task',
		currentModule: '1',
		currentTask: '1',
		modules:[],
		tasks:[],
		actions:[],
	},


	mutations: {
		SET_MODULES: (state, payload) => {
			state.modules = payload;
		},

		SET_TASKS: (state, payload) => {
			state.tasks = payload;
			//console.log(state.tasks[0].task);
		},

		SET_ACTIONS: (state, payload) => {
			state.actions = payload;
		},

		RETRIEVE_TOKEN: (state, token) => {
			state.token = token;
		},
		DESTROY_TOKEN: (state) => {
			state.token = null;
		}

	},

	getters: {

		loggedIn(state){
			return state.token !== null;
		},
		getTask(state) {
			return state.requiredTask;
		}
	},


	actions: {

		register(context, data) {
			return new Promise ((resolve, reject) => {
				axios.post('/register', {
					name: data.name,
					email: data.email,
					password: data.password,
				})
				.then(response => {

					resolve(response)

				})
				.catch(error => {
				
					reject(error);
				})
			})
		},

		destroyToken(context){
			axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token

			if (context.getters.loggedIn){
				return new Promise ((resolve, reject) => {
					axios.post('/logout')
					.then(response => {

						localStorage.removeItem('access_token')
						context.commit("DESTROY_TOKEN")
						resolve(response)
						// console.log(response);
					})
					.catch(error => {
						localStorage.removeItem('access_token')
						context.commit("DESTROY_TOKEN")
						reject(error);
					})
				})

			}
		},

		  loadModules(context) {

			    return axios.get('api/modules').then(response => {
			        context.commit("SET_MODULES", response.data);
     	    	});
			},

			initalizeTasks(context, tasks){

				context.commit("SET_TASKS", tasks);
			},

			loadTasks(context, tasks){

				context.commit("SET_TASKS", tasks);

			},

			loadActions(context){

				axios.get(`api/users/6/responses`).then(response => {
			        console.log(response.data);
			    });
				// return axios.get(`api/tasks/${context.state.currentTask}/actions/responses`).then(response => {
			 //        context.commit("SET_ACTIONS", response.data);

			 //    });
			},

			retrieveToken(context, credentials){
				return new Promise ((resolve, reject) => {
					axios.post('/login', {
						username: credentials.username,
						password: credentials.password,
					})
					.then(response => {
						const token = response.data.access_token

						localStorage.setItem('access_token', token)
						context.commit("RETRIEVE_TOKEN", token)
						resolve(response)
						// console.log(response);
					})
					.catch(error => {
						console.log(error);
						reject(error);
					})
				})
			},
	}

});
