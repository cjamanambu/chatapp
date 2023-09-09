<script setup>
import AppBranding from "@/Components/AppBranding.vue";
import ProfileItem from "@/Components/SideMenuItems/ProfileItem.vue";
import ChatsItem from "@/Components/SideMenuItems/ChatsItem.vue";
import ContactsItem from "@/Components/SideMenuItems/ContactsItem.vue";
import SettingsItem from "@/Components/SideMenuItems/SettingsItem.vue";
import LightToggleItem from "@/Components/SideMenuItems/LightToggleItem.vue";
import UserDropdownItem from "@/Components/SideMenuItems/UserDropdownItem.vue";
</script>

<template>
    <div class="side-menu flex-lg-column">
        <AppBranding />
        <div class="flex-lg-column my-0 sidemenu-navigation">
            <ul class="nav nav-pills side-menu-nav" role="tablist">
                <ProfileItem />
                <ChatsItem />
                <ContactsItem />
                <SettingsItem />
                <LightToggleItem />
                <UserDropdownItem />
            </ul>
        </div>
    </div>
</template>
