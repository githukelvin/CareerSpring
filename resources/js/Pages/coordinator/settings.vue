<template>
    <Head title="Settings" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Settings</h1>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

const routeobject = [
    {
        Name: "Dashboard",
        routeName: "/coordinator",
        icon: "LogoIcon",
    },
    {
        Name: "Analytics",
        routeName: "/coordinator/analytics",
        icon: "LogoIcon",
    },
    {
        Name: "Allocation",
        routeName: "/coordinator/allocation",
        icon: "LogoIcon",
    },
    {
        Name: "Settings",
        routeName: "/coordinator/settings",
        icon: "LogoIcon",
    },
];
</script>

<style lang="scss" scoped></style>
