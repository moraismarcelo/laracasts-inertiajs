<template>
    <Head>
        <title>Create new User</title>
    </Head>
<h1>Create new User</h1>
    <form
        @submit.prevent="submit"
    >
    <label for="name">Name</label><br>
    <input v-model="form.name" type="text" name="name" id="" placeholder="name"><br>

    <label for="email">Email</label><br>
    <input v-model="form.email" type="email" name="email" id="" placeholder="email"><br>

    <label for="password">Password</label><br>
    <input v-model="form.password" type="password" name="password" id="" placeholder="password"><br>

        <button type="submit">Enviar</button>
    </form>

</template>

<script setup>
    import {reactive} from 'vue'
    import {Inertia} from "@inertiajs/inertia"

let form = reactive({
        name: '',
        email: '',
        password: ''
    })
let submit =  () => {
    Inertia.post('/users', form)
}

</script>

<style>

</style>
