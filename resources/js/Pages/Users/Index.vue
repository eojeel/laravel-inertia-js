<script setup>
import Pagniation from '../../Components/Pagniation.vue'
import {ref, watch } from 'vue'
import { Inertia } from '@inertiajs/inertia';
import throttle from 'lodash/throttle'

let props = defineProps({
    time: String,
    users: Object,
    filters: Object
});

let search = ref(props.filters.search);

watch(search, throttle(function (value) {
    Inertia.get('/users', { search: value}, {preserveState: true, replace: true });
    }, 500));
</script>

<template>
    <Head>
        <title>Users</title>
    </Head>

    <div class="flex justify-between mb-6">
        <div class="flex items-center">
            <h1>Users</h1>
            <Link href="users/create" class="text-blue-500 text-xs ml-2">New User</Link>
        </div>
        <input v-model="search" type="text" class="border px-2 rounded-lg" placeholder="search">
    </div>

    <div class="p-3">
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <tbody class="text-sm divide-y divide-gray-300">
                    <tr v-for=" user in users.data" :key="user.id">
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="font-medium text-gray-800">{{ user.name }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap text-right">
                            <Link href="`/users/${user.id}/edit1" class="text-indigo-600 hover:text-indigo-900">Edit
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Paginator -->
    <Pagniation :links="users.links" class="mt-6"/>


    <div style="margin-top:600px">
        <p>The current time is {{ time }}</p>
        <Link href="/users" preserve-scroll>Refresh</Link>
    </div>
</template>
