<script setup>
import NavLink from './NavLink.vue';
</script>

<template>
    <nav class="flex items-center justify-between bg-bgPrimary">
        <h1 class="ml-8">
            <img src="../../assets/img/logo.png" alt="logo to home"
                 class="size-6 sm:size-8 md:size-10">
        </h1>
        <ul class="flex divide-x divide-stroke text-xs sm:text-base">
            <li class="sp:p-2 sm:p-4">
                <NavLink href="/decks" :active="$page.component === 'Decks/Index'">
                    Decks
                </NavLink>
            </li>
            <li class="sp:p-2 sm:p-4">
                <NavLink href="/account" :active="$page.component === 'Profile/Edit'">
                    Account
                </NavLink>
            </li>
            <li class="sp:p-2 sm:p-4">
                <NavLink href="/logout" method="post" as="button">
                    <img src="../../assets/img/nav/logout.png" alt="log out"
                         class="size-4 sm:size-6 mx-2">
                </NavLink>
            </li>
        </ul>
    </nav>
</template>