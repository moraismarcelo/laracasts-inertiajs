<template>
    <Head>
        <title> Users</title>
    </Head>
  <h1>Users</h1>

  <table class="table-auto">
  <tbody>
    <tr v-for="user in users.data" key="user.id">
      <td>{{user.name}}</td>
    </tr>
  </tbody>
</table>
<!-- Pagination -->

<Pagination :links="users.links" class="mt-6"/>

</template>


<script setup>
    import Pagination from '../Shared/Pagination.vue'
    defineProps({
        users: Object
    })

</script>

<style>

</style>
