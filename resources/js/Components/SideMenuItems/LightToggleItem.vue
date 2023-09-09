<script setup>
const toggleMode = () => {
    let e = document.getElementsByTagName("body")[0];
    e.hasAttribute("data-layout-mode") &&
    "dark" === e.getAttribute("data-layout-mode")
        ? document.body.setAttribute("data-layout-mode", "light")
        : document.body.setAttribute("data-layout-mode", "dark");
};
</script>

<template>
    <li class="nav-item mt-auto">
        <a
            @click="toggleMode"
            class="nav-link light-dark"
            href="javascript:void(0)"
            data-bs-toggle="tooltip"
            data-bs-trigger="hover"
            data-bs-placement="right"
            data-bs-container=".sidemenu-navigation"
            data-bs-html="true"
            title="<span class='light-mode'>Light</span> <span class='dark-mode'>Dark</span> Mode"
        >
            <i class="bx bx-moon"></i>
        </a>
    </li>
</template>
