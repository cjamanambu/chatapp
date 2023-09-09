<script setup>
import { ref } from "vue";
import { router } from "@inertiajs/vue3";

const googleIcon = ref("/images/icons/icons8-google-96.png");

const googleCtaHandler = () => {
    router.get(route("auth.get.google"), {}, {});
};
</script>

<template>
    <a
        :href="route('auth.get.google')"
        class="btn btn-outline-dark w-100 google-btn"
    >
        <img :src="googleIcon" alt="google icon" class="google-icon" />
        Continue with Google
    </a>
</template>
