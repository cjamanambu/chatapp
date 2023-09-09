<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
</script>

<template>
    <AuthLayout>
        <Head title="Unverified Email" />
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h3>Email Unverified</h3>
            <small class="text-muted">
                <Link :href="route('auth.get.logout')">Logout</Link>
            </small>
        </div>
        <p>
            You need to verify your email address before you can access your
            account. Please check your inbox (including spam) for a verification
            link.
        </p>
        <p class="mb-5">
            If you didn't receive a message, please resend the verification link
            below.
        </p>
        <div class="text-center">
            <Link
                class="btn btn-primary w-100"
                :href="route('auth.get.resend-verification')"
            >
                Resend Verification Link
            </Link>
        </div>
    </AuthLayout>
</template>
