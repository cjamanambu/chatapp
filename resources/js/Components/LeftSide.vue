<script setup>
import LeftSideUser from "@/Components/LeftSideItems/LeftSideUser.vue";
import LeftSideChat from "@/Components/LeftSideItems/LeftSideChat.vue";
import LeftSideContacts from "@/Components/LeftSideItems/LeftSideContacts.vue";
import LeftSideSettings from "@/Components/LeftSideItems/LeftSideSettings.vue";
</script>

<template>
    <div class="chat-leftsidebar">
        <div class="tab-content">
            <LeftSideUser />
            <LeftSideChat />
            <LeftSideContacts />
            <LeftSideSettings />
        </div>
    </div>
</template>
