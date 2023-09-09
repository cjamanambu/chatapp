<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import GoogleCTA from "@/Components/GoogleCTA.vue";

const form = useForm({
    email: "",
    password: "",
    remember: false,
});
const submit = () => {
    form.post(route("auth.post.login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <AuthLayout>
        <Head title="Login" />
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h3>Sign In</h3>
            <small class="text-muted">
                <Link :href="route('auth.get.register')">Create Account</Link>
                instead?
            </small>
        </div>
        <form @submit.prevent="submit">
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
            <div>
                <div class="float-end">
                    <Link
                        :href="route('auth.get.forgot-password')"
                        class="text-muted small"
                    >
                        Forgot password?
                    </Link>
                </div>
                <div class="form-check form-check-info font-size-16">
                    <input
                        id="remember-check"
                        class="form-check-input"
                        type="checkbox"
                        name="remember"
                        v-model="form.remember"
                    />
                    <label
                        class="form-check-label font-size-14"
                        for="remember-check"
                    >
                        Remember me
                    </label>
                </div>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-primary w-100" type="submit">
                    Sign In
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
    </AuthLayout>
</template>
