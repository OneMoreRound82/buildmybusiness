// Dashboard.vue

<template>
  <div>
    <div>
        <h1>Hello {{ name }}!</h1>
        <h2>This is your Dashboard.</h2>
    </div>
    <div>
    <p>To view your projects, choose one from the list below</p>
    <li><router-link to='/project/actions'>View Project</router-link></li>
  </div>
</div>
</template>
<script>
export default {

  data(){
    return {
      name: this.$store.state.userName
    }
  },

  mounted() {


       this.$store
       .dispatch("getUserDetails");

  },
}
</script>
