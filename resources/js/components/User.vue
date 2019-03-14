// User.vue

<template>
  <div>
    <header>
      <h1>{{ title }}</h1>
    </header>
    <router-view></router-view>
  </div>
</template>

<script>


export default {

  data(){
    return {
      title: 'User'
    }
  }


}

</script>

<stlye scoped>
  .header {
    background: lightgreen;
    padding: 10px;
  }

  .h1{
    color: #222;
    text-align: center;
  }
</style>
