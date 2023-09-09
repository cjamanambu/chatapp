<script setup>
import { computed } from "vue";
import { usePage, Link, router } from "@inertiajs/vue3";

const user = computed(() => usePage().props.auth.user);
const profileImg =
    user.value.profile_img || "https://via.placeholder.com/500x500";
const avatar = user.value.avatar || "https://via.placeholder.com/110x110";
</script>

<template>
    <!-- Start Profile tab-pane -->
    <div
        class="tab-pane"
        id="pills-user"
        role="tabpanel"
        aria-labelledby="pills-user-tab"
    >
        <!-- Start profile content -->
        <div>
            <div class="user-profile-img">
                <img
                    :src="profileImg"
                    class="profile-img"
                    style="height: 160px"
                    alt="profile-img"
                />
                <div class="overlay-content">
                    <div>
                        <div class="user-chat-nav p-2 ps-3">
                            <div class="d-flex w-100 align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="text-white mb-0">My Profile</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="dropdown">
                                        <button
                                            class="btn nav-btn text-white dropdown-toggle"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            <i
                                                class="bx bx-dots-vertical-rounded"
                                            ></i>
                                        </button>
                                        <div
                                            class="dropdown-menu dropdown-menu-end"
                                        >
                                            <Link
                                                :href="route('legal.get.terms')"
                                                class="dropdown-item d-flex align-items-center justify-content-between"
                                            >
                                                Terms
                                                <i
                                                    class="bx bx-help-circle ms-2 text-muted"
                                                />
                                            </Link>
                                            <Link
                                                :href="
                                                    route('legal.get.privacy')
                                                "
                                                class="dropdown-item d-flex align-items-center justify-content-between"
                                            >
                                                Privacy Policy
                                                <i
                                                    class="bx bx-notepad ms-2 text-muted"
                                                />
                                            </Link>

                                            <div class="dropdown-divider"></div>
                                            <Link
                                                class="dropdown-item d-flex align-items-center justify-content-between"
                                                :href="route('auth.get.logout')"
                                            >
                                                Sign Out
                                                <i
                                                    class="bx bx-log-out-circle text-muted ms-2"
                                                ></i>
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="text-center p-3 p-lg-4 border-bottom pt-2 pt-lg-2 mt-n5 position-relative"
            >
                <div class="mb-lg-3 mb-2">
                    <img
                        :src="avatar"
                        class="rounded-circle avatar-lg img-thumbnail"
                        alt="avatar"
                    />
                </div>

                <h5 class="font-size-16 mb-1 text-truncate">
                    {{ user.username }}
                </h5>
                <p class="text-muted font-size-14 text-truncate mb-0">
                    {{ user.email }}
                </p>
            </div>
            <!-- End profile user -->

            <!-- Start user-profile-desc -->
            <div class="p-4 profile-desc" data-simplebar>
                <div class="text-muted">
                    <p class="mb-4">
                        If several languages coalesce, the grammar of the
                        resulting language is more simple.
                    </p>
                </div>

                <div>
                    <div class="d-flex py-2">
                        <div class="flex-shrink-0 me-3">
                            <i class="bx bx-user align-middle text-muted"></i>
                        </div>
                        <div class="flex-grow-1">
                            <p class="mb-0">Adam Zampa</p>
                        </div>
                    </div>

                    <div class="d-flex py-2">
                        <div class="flex-shrink-0 me-3">
                            <i
                                class="bx bx-message-rounded-dots align-middle text-muted"
                            ></i>
                        </div>
                        <div class="flex-grow-1">
                            <p class="mb-0">adc@123.com</p>
                        </div>
                    </div>

                    <div class="d-flex py-2">
                        <div class="flex-shrink-0 me-3">
                            <i
                                class="bx bx-location-plus align-middle text-muted"
                            ></i>
                        </div>
                        <div class="flex-grow-1">
                            <p class="mb-0">California, USA</p>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />

                <div>
                    <div>
                        <h5 class="font-size-11 text-muted text-uppercase mb-3">
                            Attached Files
                        </h5>
                    </div>

                    <!--                    <div>-->
                    <!--                        <div class="card p-2 border mb-2">-->
                    <!--                            <div class="d-flex align-items-center">-->
                    <!--                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">-->
                    <!--                                    <div-->
                    <!--                                        class="avatar-title bg-soft-primary text-primary rounded-circle"-->
                    <!--                                    >-->
                    <!--                                        <i class="bx bx-file"></i>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="flex-grow-1 overflow-hidden">-->
                    <!--                                    <h5 class="font-size-14 text-truncate mb-1">-->
                    <!--                                        design-phase-1-approved.pdf-->
                    <!--                                    </h5>-->
                    <!--                                    <p class="text-muted font-size-13 mb-0">-->
                    <!--                                        12.5 MB-->
                    <!--                                    </p>-->
                    <!--                                </div>-->

                    <!--                                <div class="flex-shrink-0 ms-3">-->
                    <!--                                    <div class="d-flex gap-2">-->
                    <!--                                        <div>-->
                    <!--                                            <a href="#" class="text-muted px-1">-->
                    <!--                                                <i class="bx bxs-download"></i>-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="dropdown">-->
                    <!--                                            <a-->
                    <!--                                                class="dropdown-toggle text-muted px-1"-->
                    <!--                                                href="#"-->
                    <!--                                                role="button"-->
                    <!--                                                data-bs-toggle="dropdown"-->
                    <!--                                                aria-haspopup="true"-->
                    <!--                                                aria-expanded="false"-->
                    <!--                                            >-->
                    <!--                                                <i-->
                    <!--                                                    class="bx bx-dots-horizontal-rounded"-->
                    <!--                                                ></i>-->
                    <!--                                            </a>-->
                    <!--                                            <div-->
                    <!--                                                class="dropdown-menu dropdown-menu-end"-->
                    <!--                                            >-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Share-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-share-alt ms-2 text-muted"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Bookmark-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-bookmarks text-muted ms-2"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                                <div-->
                    <!--                                                    class="dropdown-divider"-->
                    <!--                                                ></div>-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Delete-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-trash ms-2 text-muted"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                            </div>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="card p-2 border mb-2">-->
                    <!--                            <div class="d-flex align-items-center">-->
                    <!--                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">-->
                    <!--                                    <div-->
                    <!--                                        class="avatar-title bg-soft-primary text-primary rounded-circle"-->
                    <!--                                    >-->
                    <!--                                        <i class="bx bx-image"></i>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="flex-grow-1 overflow-hidden">-->
                    <!--                                    <h5 class="font-size-14 text-truncate mb-1">-->
                    <!--                                        Image-1.jpg-->
                    <!--                                    </h5>-->
                    <!--                                    <p class="text-muted font-size-13 mb-0">-->
                    <!--                                        4.2 MB-->
                    <!--                                    </p>-->
                    <!--                                </div>-->

                    <!--                                <div class="flex-shrink-0 ms-3">-->
                    <!--                                    <div class="d-flex gap-2">-->
                    <!--                                        <div>-->
                    <!--                                            <a href="#" class="text-muted px-1">-->
                    <!--                                                <i class="bx bxs-download"></i>-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="dropdown">-->
                    <!--                                            <a-->
                    <!--                                                class="dropdown-toggle text-muted px-1"-->
                    <!--                                                href="#"-->
                    <!--                                                role="button"-->
                    <!--                                                data-bs-toggle="dropdown"-->
                    <!--                                                aria-haspopup="true"-->
                    <!--                                                aria-expanded="false"-->
                    <!--                                            >-->
                    <!--                                                <i-->
                    <!--                                                    class="bx bx-dots-horizontal-rounded"-->
                    <!--                                                ></i>-->
                    <!--                                            </a>-->
                    <!--                                            <div-->
                    <!--                                                class="dropdown-menu dropdown-menu-end"-->
                    <!--                                            >-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Share-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-share-alt ms-2 text-muted"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Bookmark-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-bookmarks text-muted ms-2"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                                <div-->
                    <!--                                                    class="dropdown-divider"-->
                    <!--                                                ></div>-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Delete-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-trash ms-2 text-muted"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                            </div>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="card p-2 border mb-2">-->
                    <!--                            <div class="d-flex align-items-center">-->
                    <!--                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">-->
                    <!--                                    <div-->
                    <!--                                        class="avatar-title bg-soft-primary text-primary rounded-circle"-->
                    <!--                                    >-->
                    <!--                                        <i class="bx bx-image"></i>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="flex-grow-1 overflow-hidden">-->
                    <!--                                    <h5 class="font-size-14 text-truncate mb-1">-->
                    <!--                                        Image-2.jpg-->
                    <!--                                    </h5>-->
                    <!--                                    <p class="text-muted font-size-13 mb-0">-->
                    <!--                                        3.1 MB-->
                    <!--                                    </p>-->
                    <!--                                </div>-->

                    <!--                                <div class="flex-shrink-0 ms-3">-->
                    <!--                                    <div class="d-flex gap-2">-->
                    <!--                                        <div>-->
                    <!--                                            <a href="#" class="text-muted px-1">-->
                    <!--                                                <i class="bx bxs-download"></i>-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="dropdown">-->
                    <!--                                            <a-->
                    <!--                                                class="dropdown-toggle text-muted px-1"-->
                    <!--                                                href="#"-->
                    <!--                                                role="button"-->
                    <!--                                                data-bs-toggle="dropdown"-->
                    <!--                                                aria-haspopup="true"-->
                    <!--                                                aria-expanded="false"-->
                    <!--                                            >-->
                    <!--                                                <i-->
                    <!--                                                    class="bx bx-dots-horizontal-rounded"-->
                    <!--                                                ></i>-->
                    <!--                                            </a>-->
                    <!--                                            <div-->
                    <!--                                                class="dropdown-menu dropdown-menu-end"-->
                    <!--                                            >-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Share-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-share-alt ms-2 text-muted"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Bookmark-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-bookmarks text-muted ms-2"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                                <div-->
                    <!--                                                    class="dropdown-divider"-->
                    <!--                                                ></div>-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Delete-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-trash ms-2 text-muted"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                            </div>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->

                    <!--                        <div class="card p-2 border mb-2">-->
                    <!--                            <div class="d-flex align-items-center">-->
                    <!--                                <div class="flex-shrink-0 avatar-xs ms-1 me-3">-->
                    <!--                                    <div-->
                    <!--                                        class="avatar-title bg-soft-primary text-primary rounded-circle"-->
                    <!--                                    >-->
                    <!--                                        <i class="bx bx-file"></i>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="flex-grow-1 overflow-hidden">-->
                    <!--                                    <h5 class="font-size-14 text-truncate mb-1">-->
                    <!--                                        Landing-A.zip-->
                    <!--                                    </h5>-->
                    <!--                                    <p class="text-muted font-size-13 mb-0">-->
                    <!--                                        6.7 MB-->
                    <!--                                    </p>-->
                    <!--                                </div>-->

                    <!--                                <div class="flex-shrink-0 ms-3">-->
                    <!--                                    <div class="d-flex gap-2">-->
                    <!--                                        <div>-->
                    <!--                                            <a href="#" class="text-muted px-1">-->
                    <!--                                                <i class="bx bxs-download"></i>-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                        <div class="dropdown">-->
                    <!--                                            <a-->
                    <!--                                                class="dropdown-toggle text-muted px-1"-->
                    <!--                                                href="#"-->
                    <!--                                                role="button"-->
                    <!--                                                data-bs-toggle="dropdown"-->
                    <!--                                                aria-haspopup="true"-->
                    <!--                                                aria-expanded="false"-->
                    <!--                                            >-->
                    <!--                                                <i-->
                    <!--                                                    class="bx bx-dots-horizontal-rounded"-->
                    <!--                                                ></i>-->
                    <!--                                            </a>-->
                    <!--                                            <div-->
                    <!--                                                class="dropdown-menu dropdown-menu-end"-->
                    <!--                                            >-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Share-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-share-alt ms-2 text-muted"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Bookmark-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-bookmarks text-muted ms-2"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                                <div-->
                    <!--                                                    class="dropdown-divider"-->
                    <!--                                                ></div>-->
                    <!--                                                <a-->
                    <!--                                                    class="dropdown-item d-flex align-items-center justify-content-between"-->
                    <!--                                                    href="#"-->
                    <!--                                                    >Delete-->
                    <!--                                                    <i-->
                    <!--                                                        class="bx bx-trash ms-2 text-muted"-->
                    <!--                                                    ></i-->
                    <!--                                                ></a>-->
                    <!--                                            </div>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
            </div>
            <!-- end user-profile-desc -->
        </div>
        <!-- End profile content -->
    </div>
    <!-- End Profile tab-pane -->
</template>
