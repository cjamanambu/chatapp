<script setup>
import SideMenu from "@/Components/SideMenu.vue";
import LeftSide from "@/Components/LeftSide.vue";
import { showFlashNotifications } from "@/Utils/index.js";

showFlashNotifications();
</script>

<template>
    <div class="layout-wrapper d-lg-flex">
        <SideMenu />
        <LeftSide />
        <notifications />
        <slot />
    </div>
</template>
