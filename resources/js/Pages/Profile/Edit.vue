<script setup>
import Layout from '@/Layouts/Layout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>

    <Head title="Account" />

    <Layout>
        <h2 class="text-sm sm:text-lg">Your account</h2>

        <div class="grid gap-8 sm:gap-12 md:gap-16 mt-4 sm:mt-8 md:mt-10">
            <UpdateProfileInformationForm 
                :must-verify-email="mustVerifyEmail" 
                :status="status" 
                class="max-w-xl" />

            <UpdatePasswordForm class="max-w-xl" />

            <DeleteUserForm class="max-w-xl" />
        </div>
    </Layout>
</template>
