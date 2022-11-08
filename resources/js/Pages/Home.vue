<template>
    <Head>
        <title>Home</title>
    </Head>
        <p class="text-3xl font-bold underline">we will use the following frameworks</p>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
</template>

<script setup>
defineProps({
    frameworks: Array,
})
</script>
