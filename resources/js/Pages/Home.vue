<script>
import Layout from '../Layouts/Layout.vue'

export default {
    components: { Layout },
    props: {
        frameworks: Array,
    }
};
</script>


<template>
    <Layout>
        <p class="text-3xl font-bold underline">we will use the following frameworks</p>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
    </layout>
</template>
