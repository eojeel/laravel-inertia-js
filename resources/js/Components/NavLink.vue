<script>
export default {
  props: {
    active: Boolean
  }
};
</script>

<template>
        <Link class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"
        :class="{'font-bold underline' : active }">
            <slot />
        </Link>
</template>
