<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { showFlashNotification } from "@/Utils";

const form = useForm({
    email: "",
});

const submit = () => {
    form.post(route("auth.post.forgot-password"), {
        onSuccess: () => {
            showFlashNotification(
                "Action Successful!",
                `We have emailed your password reset link! Please check your email`,
                "success",
            );
            form.reset("email");
        },
    });
};
</script>

<template>
    <AuthLayout>
        <Head title="Forgot Password" />

        <div class="d-flex justify-content-between align-items-center mb-2">
            <h3>Trouble Signing In?</h3>
            <small class="text-muted">
                Otherwise,
                <Link :href="route('auth.get.login')">Sign In</Link>
            </small>
        </div>

        <p class="mb-5">
            Don't worry, we've got your back! Just enter your email address and
            we'll send you a link with which you can reset your password.
        </p>

        <form @submit.prevent="submit">
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input
                    id="email"
                    type="email"
                    class="form-control"
                    :class="{ error: form.errors.email }"
                    v-model="form.email"
                />
                <p v-if="form.errors.email" class="form-error">
                    {{ form.errors.email }}
                </p>
            </div>

            <div class="text-center mt-4">
                <button class="btn btn-primary w-100" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </AuthLayout>
</template>
