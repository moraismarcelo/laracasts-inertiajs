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
    <div v-if="form.errors.name" class="text-red-500">{{form.errors.name}}</div>

    <label for="email">Email</label><br>
    <input v-model="form.email" type="email" name="email" id="" placeholder="email"><br>
    <div v-if="form.errors.email" class="text-red-500">{{form.errors.email}}</div>

    <label for="password">Password</label><br>
    <input v-model="form.password" type="password" name="password" id="" placeholder="password"><br>
    <div v-if="form.errors.password" class="text-red-500">{{form.errors.password}}</div>

        <button type="submit" :disabled="processing">Enviar</button>
    </form>

</template>

<script setup>
    import {useForm} from "@inertiajs/inertia-vue3"

let form = useForm({
        name: '',
        email: '',
        password: ''
    })
let submit =  () => {
    form.post('/users')
}

</script>

<style>

</style>
