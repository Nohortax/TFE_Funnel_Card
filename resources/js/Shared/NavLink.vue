<script setup>
import { computed } from 'vue';

defineProps({
    active: {
        type: Boolean
    }
})

</script>

<template>
    <Link :class="{'font-bold': active}">
        <slot />
    </Link>
</template>