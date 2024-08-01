<template>
    <Head title="Director"/>
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4 ">
            <h1 class="font-[semibold] text-xl ">Dashboard</h1>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
</script>

<style lang="scss" scoped>

</style>
