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
        title="Contacts"
    >
        <a
            class="nav-link"
            id="pills-contacts-tab"
            data-bs-toggle="pill"
            href="#pills-contacts"
            role="tab"
        >
            <i class="bx bxs-user-detail"></i>
        </a>
    </li>
</template>
