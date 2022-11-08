<script>
import  NavLink from './NavLink.vue';

export default {
    components: { NavLink }
};
</script>

<template>
<div class="">
    <nav class="flex flex-col sm:flex-row">
                <NavLink href="/" :active="$page.component == 'Home'">Home</NavLink>
                <NavLink href="/users" :active="$page.component == 'Users'">Users</NavLink>
                <NavLink href="/settings" :active="$page.component == 'Settings'">Settings</NavLink>
        </nav>
    </div>
</template>
