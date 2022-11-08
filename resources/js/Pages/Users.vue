<script setup>
    defineProps({
        time: String
    });
</script>

<template>
        <Head>
        <title>Users</title>
        </Head>
        <h1>Users</h1>
        <div style="margin-top:600px">
            <p>The current time is {{ time }}</p>
            <Link href="/users" preserve-scroll>Refresh</Link>
        </div>
</template>
