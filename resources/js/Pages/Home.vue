<script setup>
import Nav from '../Components/Nav.vue'

defineProps({
    components: Nav ,
    framework: Array,
})
</script>

<template>
    <Nav />
    <p class="text-3xl font-bold underline">we will use the following frameworks</p>
    <ul>
    <li v-for="framework of frameworks" v-text="framework"></li>
    </ul>
</template>
