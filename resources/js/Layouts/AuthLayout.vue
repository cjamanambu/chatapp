<script setup>
import Branding from "@/Components/Branding.vue";
import Copyright from "@/Components/Copyright.vue";
import { ref } from "vue";
import { showFlashNotifications } from "@/Utils";

const videoCall = ref("/images/video-call.svg");

showFlashNotifications();
</script>

<template>
    <div class="auth-bg">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-3 col-lg-4">
                    <div class="p-4 pb-0 p-lg-5 pb-lg-0 auth-logo-section">
                        <Branding />
                        <div class="mt-auto">
                            <img
                                :src="videoCall"
                                alt="video-call-illustration"
                                class="auth-img"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="authentication-page-content">
                        <div class="d-flex flex-column h-100 px-4 pt-4">
                            <div class="row justify-content-center my-auto">
                                <div
                                    class="col-sm-8 col-lg-6 col-xl-5 col-xxl-4"
                                >
                                    <div class="py-md-5 py-4">
                                        <notifications />
                                        <slot />
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

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

<style>
.google-btn {
    position: relative;
}

.google-icon {
    width: 1.2em;
    position: absolute;
    left: 3%;
    top: 30%;
}

.form-error {
    width: 100%;
    margin-top: 0.25rem;
    font-size: 0.875em;
    color: #ef476f;
}

.form-control.error {
    border-color: #ef476f;
}
</style>
