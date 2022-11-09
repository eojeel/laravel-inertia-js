<template>
    <header class="flex bg-gray-300 p-3 justify-between">
        <div class="flex items-center">
            <h1 class="font-bold text-lg">My App</h1>
            <p class="text-sm ml-4" v-if="username">{{ username }}!</p>
        </div>
        <Nav />
    </header>

  <section class="p-6">
    <div class="max-w-3xl mx-auto">
            <iframe class="mb-10 items-center w-full" height="400" src="https://www.youtube.com/embed/jAIX7U4EZbI" title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

            <slot />
        </div>
    </section>
</template>

<script>
import Nav from "../Components/Nav.vue";

export default {
    components: { Nav },
    computed: {
        username() {
            if(this.$page.props.auth.user){
            return `Welcome back ${this.$page.props.auth.user.name}`;
            }
            return 'Not Logged In!';
        }
    }
};
</script>
