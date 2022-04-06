<template>
    <Head>
        <title> Users</title>
    </Head>
  <h1>Users</h1>
  <ul>
    <li v-for="user in users" key="user.id">{{user.name}}</li>
  </ul>


</template>


<script setup>
    defineProps({
        users: Array
    })

</script>

<style>

</style>
