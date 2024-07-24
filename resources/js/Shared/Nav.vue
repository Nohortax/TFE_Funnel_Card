<script setup>
import NavLink from './NavLink.vue';

components: {
    NavLink
}
</script>

<template>
    <nav class="flex items-center justify-between bg-bgPrimary">
        <h1 class="ml-8">
            <NavLink href="/">
                <img src="../../assets/img/logo.png" alt="logo to home"
                     class="size-6 sm:size-8 md:size-10">
            </NavLink>
        </h1>
        <ul class="flex divide-x divide-stroke text-xs sm:text-base">
            <li class="sp:p-2 sm:p-4">
                <NavLink href="/decks">
                    Decks
                </NavLink>
            </li>
            <li class="sp:p-2 sm:p-4">
                <NavLink href="/cards">
                    Cards
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