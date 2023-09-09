<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { toRefs } from "vue";

const props = defineProps({
    user: Object,
    token: String,
});

const { token } = toRefs(props);

const form = useForm({
    password: "",
    password_confirmation: "",
    token: token.value,
});

const submit = () => {
    form.post(route("auth.post.reset-password"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <AuthLayout>
        <Head title="Reset Password" />
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h3>Reset Password</h3>
            <small class="text-muted">
                Otherwise,
                <Link :href="route('auth.get.login')">Sign In</Link>
            </small>
        </div>
        <p class="mb-5">
            Hi {{ user.username }}, please enter and confirm your new password
            below.
        </p>

        <form @submit.prevent="submit">
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
