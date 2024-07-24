<script setup>
import Nav from '@/Shared/Nav.vue';

components: {
    Nav
}
</script>

<template>
    <div class="bg-bgSecondary container min-h-screen
                border-2 rounded-sm border-bgSecondary 
                pb-5 mx-0
                sp:mx-auto sp:my-2
                sm:my-8">
        <header class="sp:mb-4 sm:mb-8">
            <Nav />
        </header>

        <main class="px-2 sm:px-4 md:px-8">
            <slot />
        </main>
    </div>
    
    
</template>