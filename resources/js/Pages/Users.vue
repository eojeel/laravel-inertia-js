<script setup>
import Pagniation from '../Components/Pagniation.vue'

defineProps({
    time: String,
    users: Object
});
</script>

<template>

    <Head>
        <title>Users</title>
    </Head>
    <h1>Users</h1>


    <div class="p-3">
        <div class="overflow-x-auto">
            <table class="table-auto w-7/12">
                <tbody class="text-sm divide-y divide-gray-100">
                    <tr v-for=" user in users.data" :key="user.id">
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="font-medium text-gray-800">{{ user.name }}</div>
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
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
