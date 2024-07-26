<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Link } from '@inertiajs/vue3';

components: {
    GuestLayout,
    Link
}
</script>

<template>
    <GuestLayout>
        <h2>Study with Funnel Card</h2>

        <p class="text-xs sm:text-sm md:text-base
                  mt-10">
            Create your decks and fill them with your own flashcards. <br class="mb-2">
            Each card for which you have a correct answer will be placed further in the deck. Those for which you have a wrong answer will come back the day after.
        </p>
        <p class="text-xs sm:text-sm md:text-base
                  mt-10">
            Give it a shot!
        </p>

        <div class="flex justify-center gap-4 sm:gap-8 md:gap-12 
                    mt-6 sm:mt-8 md:mt-10
                    text-xs sm:text-sm md:text-base">
            <Link href="/login" 
                  class="border-1 rounded-md bg-bgSecondary text-primary font-bold 
                         py-1 sm:py-1.5 px-2 sm:px-4 shadow-buttonShadow">
                  Log in
            </Link>
            <Link href="/register" 
                  class="border-1 rounded-md bg-bgSecondary text-primary font-bold 
                         py-1 sm:py-1.5 px-2 sm:px-4 shadow-buttonShadow">
                  Register
            </Link>
        </div>
    </GuestLayout>
</template>