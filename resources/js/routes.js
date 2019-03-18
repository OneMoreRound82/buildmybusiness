import Home from './components/Home.vue';
import Project from './components/Project.vue';
import Register from './components/auth/Register.vue';
import Login from './components/auth/Login.vue';
import Logout from './components/auth/Logout.vue';
import Actions from './components/Actions.vue';
import Dashboard from './components/Dashboard.vue';
import Tasks from './components/Tasks.vue';
import Modules from './components/Modules.vue';

const routes = [
    {
      path: '/',
      name: 'home',
      component: Home
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
              path: 'modules/:module',
              name: 'modules',
              component: Modules,
              props: true,

              children: [
                      {
                        path: 'tasks',
                        name: 'tasks',
                        component: Tasks,

                    children: [
                          {
                            path: 'actions',
                            name: 'actions',
                            component: Actions,
                          },
                    ],
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
];

export default routes;
