<template>
        <header class="flex bg-gray-300 p-3 justify-between place-items-center">
            <h1 class="font-bold text-lg">My App</h1>
            <Nav/>
        </header>

    <section class="p-6">
        <slot />
    </section>
</template>

<script>
import Nav  from "../Components/Nav.vue";

export default {
    components: { Nav }
};
</script>
