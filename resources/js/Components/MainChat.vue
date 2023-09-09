<script setup>
import { ref } from "vue";

const logo = ref("/images/logo.png");
</script>

<template>
    <div class="user-chat w-100 overflow-hidden">
        <div class="user-chat-overlay"></div>

        <div class="chat-content d-lg-flex">
            <div class="w-100 overflow-hidden position-relative">
                <div class="chat-welcome-section">
                    <div class="row w-100 justify-content-center">
                        <div class="col-xxl-5 col-md-7">
                            <div class="p-4 text-center">
                                <div class="avatar-xl mx-auto mb-4">
                                    <div
                                        class="avatar-title bg-soft-primary rounded-circle"
                                    >
                                        <img
                                            :src="logo"
                                            alt="logo"
                                            class="align-middle text-white"
                                            style="width: 3.5em"
                                        />
                                    </div>
                                </div>
                                <h4>Welcome to ChatByCJ</h4>
                                <p class="text-muted mb-4">
                                    Enjoy simple and instant online
                                    communication. <br />
                                    Invite anyone or select a contact to get
                                    started.
                                </p>
                                <button
                                    type="button"
                                    class="btn btn-primary w-lg"
                                    data-bs-toggle="modal"
                                    data-bs-target="#invite-contact"
                                >
                                    Invite Contact
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat conversation section -->
        </div>
        <!-- end user chat content -->
    </div>
</template>
