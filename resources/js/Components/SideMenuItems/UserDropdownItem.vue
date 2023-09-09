<script setup>
import { Head, Link, useForm, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const user = computed(() => usePage().props.auth.user);
const avatar = user.value.avatar || "https://via.placeholder.com/110x110";
</script>

<template>
    <li class="nav-item dropdown profile-user-dropdown">
        <a
            class="nav-link dropdown-toggle"
            href="javascript:void(0)"
            role="button"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
        >
            <img :src="avatar" alt="" class="profile-user rounded-circle" />
        </a>
        <div class="dropdown-menu">
            <h6 class="dropdown-header text-truncate">
                {{ user.username }}
            </h6>
            <Link
                v-if="!user.social_id"
                class="dropdown-item d-flex align-items-center justify-content-between"
                :href="route('auth.get.change-password')"
            >
                Change Password
                <i class="bx bx-lock-open text-muted ms-2"></i>
            </Link>
            <div class="dropdown-divider"></div>
            <Link
                class="dropdown-item d-flex align-items-center justify-content-between"
                :href="route('auth.get.logout')"
            >
                Sign Out
                <i class="bx bx-log-out-circle text-muted ms-2"></i>
            </Link>
        </div>
    </li>
</template>
