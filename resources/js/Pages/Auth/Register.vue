<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
import GoogleCTA from "@/Components/GoogleCTA.vue";
import { Head, Link, router, useForm } from "@inertiajs/vue3";

const form = useForm({
    email: "",
    username: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("auth.post.register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <AuthLayout>
        <Head title="Register" />
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h3>Create Account</h3>
            <small class="text-muted">
                <Link :href="route('auth.get.login')">Sign In</Link>
                instead?
            </small>
        </div>
        <form @submit.prevent="submit" novalidate>
            <div class="mb-3">
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
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input
                    id="username"
                    type="text"
                    class="form-control"
                    :class="{ error: form.errors.username }"
                    v-model="form.username"
                />
                <p v-if="form.errors.username" class="form-error">
                    {{ form.errors.username }}
                </p>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
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

            <div class="mb-4">
                <p class="mb-0 small text-muted">
                    By creating an account, I agree to the
                    <Link :href="route('legal.get.terms')" class="text-primary">
                        Terms
                    </Link>
                    and
                    <Link
                        :href="route('legal.get.privacy')"
                        class="text-primary"
                    >
                        Privacy Policy
                    </Link>
                </p>
            </div>

            <div class="mb-3">
                <button
                    class="btn btn-primary w-100 waves-effect waves-light"
                    type="submit"
                >
                    Create Account
                </button>
            </div>
            <div class="mt-4 text-center">
                <div class="signin-other-title">
                    <h5 class="font-size-14 mb-4 title">or</h5>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div>
                            <GoogleCTA />
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end form -->
    </AuthLayout>
</template>
