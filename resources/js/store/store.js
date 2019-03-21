import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios'

Vue.use(Vuex);
axios.defaults.baseURL = 'http://buildmybusiness.test/api'

Vue.config.devtools = true;

export const state = {
	token: localStorage.getItem('access_token') || null,
	requiredTask: 'This is my current task',
	currentModule: '1',
	currentModuleName: 'Product & Service Analysis',
	currentTask: '1',
	modules:[],
	tasks:[],
	taskName:[],
	actions:[],
	userId: localStorage.getItem('loggedin_user') || null,
	userName: localStorage.getItem('loggedin_username') || null,
	projects:[],
	currentProjectId: '',
	currentProjectName: '',
	taskURL: 'define-product-service'
}

export const store = new Vuex.Store({

	state,

	mutations: {
		SET_MODULES: (state, payload) => {
			state.modules = payload;
		},

		SET_TASKS: (state, tasks) => {
			state.tasks = tasks;
		},

		SET_MODULE_TITLE: (state, moduleTitle) => {
			state.currentModuleName = moduleTitle
		},

		SET_ACTIONS: (state, payload) => {
			state.actions = payload;
		},

		RETRIEVE_TOKEN: (state, token) => {
			state.token = token;
		},
		DESTROY_TOKEN: (state) => {
			state.token = null;
		},
		SET_USERID: (state, userid) => {
			state.userId = userid;
		},
		DESTROY_USERID: (state) => {
			state.userId = null;
		},


		SET_USERNAME: (state, username) => {
			state.userName = username;
		},
		DESTROY_USERNAME: (state) => {
			state.userName = '';
		},


		SET_PROJECTS: (state, projects) => {
			state.projects = projects;
		},
		DESTROY_PROJECTS: (state) => {
			state.projects = [];
		},


		SET_PROJECT_ID: (state, projectId) => {
			state.currentProjectId = projectId;
		},
		SET_PROJECT_NAME: (state, projectName) => {
			state.currentProjectName = projectName;
		},


		SET_ACTION_URL: (state, taskURL) => {
			state.taskURL = taskURL;
		},

	},

	getters: {

		loggedIn(state){
			return state.token !== null;
		},

		SelectedTaskURL(state) {
			return state.taskURL;
		}
	},

	actions: {

		setActionsURL(context, taskURL){

			context.commit("SET_ACTION_URL", taskURL);

		},

		setProject(context, projectDetails){

			const projectId = projectDetails.projectId;
			const projectName = projectDetails.projectName;

			context.commit("SET_PROJECT_ID", projectId);
		  context.commit("SET_PROJECT_NAME", projectName);

		},

		fetchProjects(context) {

				axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token;
				return axios.get('/project').then(response => {

						const projectNames = response.data.map(project => project);
						context.commit("SET_PROJECTS", projectNames);

				});
		},

		getUserDetails(context) {

				axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token;
				return axios.get('/user').then(response => {


					const userid = response.data.id
						localStorage.setItem('loggedin_user', userid)
						context.commit("SET_USERID", userid);

					const username = response.data.name
						localStorage.setItem('loggedin_username', username)
						context.commit("SET_USERNAME", username);
					});
		},

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
						context.commit("DESTROY_USERID")
						context.commit("DESTROY_USERNAME")
						context.commit("DESTROY_PROJECTS")
						resolve(response)

					})
					.catch(error => {
						localStorage.removeItem('access_token')
						context.commit("DESTROY_TOKEN")
						context.commit("DESTROY_USERID")
						context.commit("DESTROY_USERNAME")
						context.commit("DESTROY_PROJECTS")
						reject(error);
					})
				})

			}
		},

		 loadModules(context) {

					axios.defaults.headers.common['Authorization'] = 'Bearer ' + context.state.token
			    return axios.get('/modules').then(response => {

			        context.commit("SET_MODULES", response.data);
     	    	});
			},

			getTasks(context, moduleDetails){


				var moduleTitle = moduleDetails.moduleName;
				var moduleTitle = (moduleTitle === undefined) ? moduleTitle = 'Product & Service Analysis' : moduleTitle;
				//console.log(moduleTitle);

				var moduleId = moduleDetails.moduleId;
				var moduleId = (moduleId === undefined) ? moduleId = 1 : moduleId;

			 	return	axios.get(`project/${context.state.currentProjectId}/module/${moduleId}`)
						.then(response => {
							context.commit("SET_TASKS", response.data);

							context.commit("SET_MODULE_TITLE", moduleTitle);
						});
			},

			loadTasks(context, tasks){

			},

			loadActions(context){


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

					})
					.catch(error => {
						console.log(error);
						reject(error);
					})
				})
			},
	}

});
