<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
</script>

<template>
    <li
        class="nav-item"
        data-bs-toggle="tooltip"
        data-bs-placement="right"
        data-bs-trigger="hover"
        data-bs-container=".sidemenu-navigation"
        title="Chats"
    >
        <a
            class="nav-link active"
            id="pills-chat-tab"
            data-bs-toggle="pill"
            href="#pills-chat"
            role="tab"
        >
            <i class="bx bx-conversation"></i>
        </a>
    </li>
</template>
