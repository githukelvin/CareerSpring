<script setup>

import LogoWhiteIcon from "@/Components/icons/LogoWhiteIcon.vue";
</script>

<template>
    <div class="bg-primary-500">

        <div class=" min-h-screen w-7/12 mx-auto ">
            <div class="grid place-content-center w-full py-12">
                <LogoWhiteIcon/>
            </div>
            <div class="rounded bg-white w-7/12 mx-auto py-12 px-8">
                <slot/>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
