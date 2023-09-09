<script setup>
import { ref } from "vue";

const logo = ref("/images/logo.png");
</script>

<template>
    <div class="text-white-50">
        <h3>
            <a href="/" class="text-white">
                <img
                    :src="logo"
                    alt="logo"
                    class="align-middle text-white h3 mb-1 me-2"
                    style="width: 1.1em"
                />
                Chat by CJ
            </a>
        </h3>
        <p>Enjoy simple and instant online communication</p>
    </div>
</template>
