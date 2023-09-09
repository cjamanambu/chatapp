<script setup>
import Branding from "@/Components/Branding.vue";
import Copyright from "@/Components/Copyright.vue";
</script>

<template>
    <div class="auth-bg">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-3 col-lg-4">
                    <div class="p-4 pb-0 p-lg-5 pb-lg-0 auth-logo-section">
                        <Branding />
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="authentication-page-content">
                        <div class="d-flex flex-column h-100 px-4 pt-4">
                            <slot />
                            <div class="row">
                                <div class="col-xl-12">
                                    <Copyright />
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
