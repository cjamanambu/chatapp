<script setup>
import { Head, Link } from "@inertiajs/vue3";
import ErrorLayout from "@/Layouts/ErrorLayout.vue";

defineProps({
    message: String,
});
</script>

<template>
    <ErrorLayout>
        <Head title="Forbidden" />
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h3>Forbidden</h3>
            <small class="text-muted">
                <Link :href="route('dashboard')">Go Home</Link>
            </small>
        </div>
        <p>
            {{ message }}
        </p>
    </ErrorLayout>
</template>
