<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { showFlashNotification } from "@/Utils";

const form = useForm({
    old_password: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("auth.post.change-password"), {
        onSuccess: () => {
            showFlashNotification(
                "Action Successful!",
                `Your password has been changed successfully!`,
                "success",
            );
            form.reset("old_password", "password", "password_confirmation");
        },
    });
};
</script>

<template>
    <AuthLayout>
        <Head title="Change Password" />

        <div class="d-flex justify-content-between align-items-center mb-2">
            <h3>Change Password</h3>
            <small class="text-muted">
                <Link :href="route('dashboard')">Go Home</Link>
            </small>
        </div>

        <form @submit.prevent="submit" class="py-2">
            <div class="mb-3">
                <label for="old-password" class="form-label">
                    Old Password
                </label>
                <input
                    id="old-password"
                    type="password"
                    class="form-control"
                    :class="{ error: form.errors.old_password }"
                    v-model="form.old_password"
                />
                <p v-if="form.errors.old_password" class="form-error">
                    {{ form.errors.old_password }}
                </p>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input
                    id="password"
                    type="password"
                    class="form-control"
                    :class="{ error: form.errors.password }"
                    v-model="form.password"
                />
                <p v-if="form.errors.password" class="form-error">
                    {{ form.errors.password }}
                </p>
            </div>
            <div class="mb-3">
                <label for="password-confirmation" class="form-label">
                    Confirm Password
                </label>
                <input
                    id="password-confirmation"
                    type="password"
                    class="form-control"
                    v-model="form.password_confirmation"
                />
            </div>

            <div class="text-center mt-4">
                <button class="btn btn-primary w-100" type="submit">
                    Submit
                </button>
            </div>
        </form>
        <!-- end form -->
    </AuthLayout>
</template>
