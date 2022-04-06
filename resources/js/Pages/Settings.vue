<template>
  <Head>
    <title> Settings</title>
  </Head>

  <h1>Settings</h1>

  <p>
  Frameworks used:
  </p>


  <ul>
    <li v-for="framework of frameworks" v-text="framework"></li>
  </ul>

</template>


<script>
export default {
    props:{
        name: String,
        frameworks: Array
    },
}
</script>

<style>

</style>
