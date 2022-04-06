<template>
    <Head>
        <title> Users</title>
    </Head>
  <div class="flex justify-between mb-6">
    <h1 class="text-3xl">Users</h1>
    <input type="text" v-model="search" name="search" placeholder="Search..." class="border px-2 rounded-lg" >
  </div>

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
    import Pagination from '../../Shared/Pagination'
    import { ref, watch } from 'vue'
    import {Inertia} from '@inertiajs/inertia'
    let props = defineProps({
        users: Object,
        filters: Object
    })
    let search = ref(props.filters.search);

    watch(search, value => {
        Inertia.get('/users', {search: value}, {
            preserveState: true,
            replace: true
            })
    });

</script>

<style>

</style>
