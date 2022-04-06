<template>
  <div>
    <Component
        :is="link.url ? 'Link' : 'span'"
        v-for="link in links"
        :href="link.url"
        v-html="link.label"
        class="px-2"
        :class="{
        'text-gray-500': !link.url,
        'text-blue-800 font-bold': link.active,
        }"
    />

</div>
</template>

<script>
export default {
    props: {
        links: Array
    }
}
</script>

<style>

</style>
