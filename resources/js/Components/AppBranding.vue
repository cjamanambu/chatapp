<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const logo = ref("/images/logo.png");
</script>

<template>
    <div class="navbar-brand-box">
        <Link :href="route('home')" class="logo logo-dark">
            <img
                :src="logo"
                alt="logo"
                class="align-middle text-white h3 mb-1 me-2"
                style="width: 1.1em"
            />
        </Link>
        <Link :href="route('home')" class="logo logo-light">
            <img
                :src="logo"
                alt="logo"
                class="align-middle text-white h3 mb-1 me-2"
                style="width: 1.1em"
            />
        </Link>
    </div>
</template>
