<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import MainChat from "@/Components/MainChat.vue";
</script>

<template>
    <AppLayout>
        <Head title="Dashboard" />
        <MainChat />
    </AppLayout>
</template>
