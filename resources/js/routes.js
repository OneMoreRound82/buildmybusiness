import Vue from "vue";
import Router from "vue-router";
import store from "./store/store";

import Home from './components/Home.vue';
import Project from './components/Project.vue';
import Register from './components/auth/Register.vue';
import Login from './components/auth/Login.vue';
import Logout from './components/auth/Logout.vue';
import Actions from './components/Actions.vue';
import Dashboard from './components/Dashboard.vue';
import Tasks from './components/Tasks.vue';
import Modules from './components/Modules.vue';


import { state }  from './store/store';
import { mapState, mapGetters } from "vuex";

Vue.use(Router);
console.log(`./components/ProductServiceAnalysis/${state.taskURL}.vue`);

export default new Router ({

 routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
      beforeEnter: (to, from, next) => {

          console.log('hello ', state.taskURL);
          next();
        },
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: Dashboard,
    },
    {
      path: '/project/:id',
      name: 'project',
      component: Project,
      props: true,
      meta: {
        requiresAuth: true,
      },

      children: [
            {
              path: 'module/:module',
              name: 'module',
              component: Tasks,
              props: true,


              children: [
                      {
                        path: 'task/:url',
                        name: 'task',
                        component:
                          require(`./components/ProductServiceAnalysis/${state.taskURL}.vue`),


                        props: true,

                    // children: [
                    //       {
                    //         path: 'actions',
                    //         name: 'actions',
                    //         component: Actions,
                    //       },
                    // ],
                  },
              ],
            },
        ],
    },
    {
      path: '/register',
      name: 'register',
      component: Register,
      meta: {
        requiresVisitor: true,
      }
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
      meta: {
        requiresVisitor: true,
      }
    },
    {
      path: '/logout',
      name: 'logout',
      component: Logout
    },
]

})

// export default routes;
