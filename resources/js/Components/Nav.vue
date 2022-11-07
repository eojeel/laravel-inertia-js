<template>
<div class="bg-white grid place-items-center">
    <nav class="flex flex-col sm:flex-row">
                <div class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"><Link href="/">Home</Link></div>
                <div class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"><Link href="/users">Users</Link></div>
                <div class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"><Link href="/settings">Settings</Link></div>
                 <div class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"><Link href="/logout" method="post">Logout</Link></div>

        </nav>
    </div>
</template>

<script>
import  Link from '@inertiajs/inertia-vue3';

export default {
    components: Link
};
</script>
