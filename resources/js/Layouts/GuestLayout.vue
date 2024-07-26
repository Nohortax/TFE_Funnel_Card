<script setup>
import Logo from '@/Components/Logo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="container min-h-screen
                border-2 rounded-sm border-bgSecondary 
                pb-5 mx-0 pt-8 px-10 sm:px-16 md:px-24
                mx-auto my-2 sm:my-8">
        <div class="w-20">
            <Link href="/">
                <Logo class="size-10 sm:size-16" />
            </Link>
        </div>

        <div class="mt-6 sm:mt-8 md:mt-10 lg:mt-12">
            <slot />
        </div>
    </div>
</template>
