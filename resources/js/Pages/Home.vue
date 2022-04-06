<template>
    <Head>
        <title>HOME</title>
    </Head>


  <h1 class="text-2xl font-bold">
  Hello from inertia Component {{name}}
  </h1>

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
