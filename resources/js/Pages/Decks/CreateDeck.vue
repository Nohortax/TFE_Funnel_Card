<script setup>
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

const userId = usePage().props.auth.user.id;

const form = useForm({
    name: '',
    category_id: '',
    user_id: userId,
})

defineProps({
    categories: Array
})

const selected = "Language";

const submit = () => {
    form.post(route("create.deck"), {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <Head title="New deck" />

    <h2 class="mb-8 sm:mb-16
               mr-2 sm:mr-8
               text-xs sm:text-sm md:text-lg">
        Create a new deck
    </h2>

    <form @submit.prevent="submit"
          class="flex flex-col items-center mb-4">
        <TextInput id="name"
                   name="name"
                   type="text"
                   class="mb-4 sm:mb-8 pl-2"
                   v-model="form.name"
                   required
                   autofocus
                   placeholder="Name your deck" />
        <InputError class="mt-2" :message="form.errors.name" />

        <InputLabel for="category"> Choose a category</InputLabel>
        <select id="category"
                name="category_id" 
                v-model="form.category_id"
                class="border-2 border-stroke rounded-sm mb-8 sm:mb-12 mt-2 pl-2
                       text-xs sm:text-sm md:text-lg"
                required>
            <option v-for="category in categories" :key="category.id"
                    :value="category.id"
                    >{{ category.name }}
            </option>
        </select>

        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
            Create deck
        </PrimaryButton>
    </form>
</template>