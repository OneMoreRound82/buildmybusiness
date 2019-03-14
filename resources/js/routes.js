import Home from './components/Home.vue';
import User from './components/User.vue';
import Register from './components/auth/Register.vue';
import Login from './components/auth/Login.vue';
import Logout from './components/auth/Logout.vue';
import Actions from './components/Actions.vue';
// import ModulesSidebar from './components/ModulesSidebar.vue';

const routes = [
    {
      path: '/home',
      name: 'home',
      component: Home
    },
    {
      path: '/user',
      name: 'user',
      component: User,
      meta: {
        requiresAuth: true,
      },
      
      children: [
          {
            path: 'actions',
            name: 'actions',
            component: Actions,
          }
        ]
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
