<script setup>
defineProps({
        links: Array
    })
</script>

<template>
    <div class="mt-2 sm:mt-4 lg:mt-6
                flex justify-center">
        <Component class="px-2"
            :class="{'text-gray-500': !link.url, 'font-bold' : link.active}"
            :is="link.url ? 'Link' : 'span'"
            v-for="link in links"
            :href="link.url"
            v-html="link.label"
        />
    </div>
</template>