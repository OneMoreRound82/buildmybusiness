// App.vue
<meta name="csrf-token" content="{{ csrf_token() }}" />
<template>
  <div id="app">


    <div>
  <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">Build My Business</b-navbar-brand>

    <b-navbar-toggle target="nav_collapse" />

    <b-collapse is-nav id="nav_collapse">

      <b-navbar-nav class="ml-auto">


        <b-nav-item right>
          <li><router-link to='/'>Home</router-link></li>
          <li v-if="!loggedIn"><router-link to='/register'>Register</router-link></li>
          <li v-if="!loggedIn"><router-link to='/login'>Login</router-link></li>
            <li v-if="loggedIn"><router-link to='/logout'>Logout</router-link></li>
        </b-nav-item>

        <b-nav-item-dropdown right>
          <!-- Using button-content slot -->
          <template slot="button-content"><em>User</em></template>
          <b-dropdown-item href="#">Signout</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>


    <router-view />
  </div>
</template>


<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>


<script>
export default {

  computed: {
    loggedIn() {
      return this.$store.getters.loggedIn;
    }
  }
}
</script>
