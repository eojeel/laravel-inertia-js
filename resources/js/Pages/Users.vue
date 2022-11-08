<script>
import Layout from '../Layouts/Layout.vue'
import Link from '@inertiajs/inertia-vue3';

export default {
    components: { Layout, Link },
    props: {
        time: String
    },
};
</script>

<template>
    <Layout>
        <h1>Users</h1>
        <div style="margin-top:600px">
            <p>The current time is {{ time }}</p>
            <Link href="/users" preserve-scroll>Refresh</Link>
        </div>
    </Layout>
</template>
