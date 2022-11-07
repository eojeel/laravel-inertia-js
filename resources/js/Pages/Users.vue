<script setup>
import Nav from '../Components/Nav.vue'
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    components: { Nav, Link },
    time: String,
})
</script>

<template>
    <Nav />
    <h1>Users</h1>
    <div style="margin-top:600px">
        <p>The current time is {{ time }}</p>
        <Link href="/users" preserve-scroll>Refresh</Link>
    </div>
</template>
