<script setup>
import AttachmentFormDetails from "@/Pages/student/partials/AttachmentFormDetails.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

import { Head } from "@inertiajs/vue3";
const routeobject = [
    {
        Name: "Dashboard",
        routeName: "/student",
        icon: "LogoIcon",
    },
    {
        Name: "Attachment Details",
        routeName: "/student/attachment",
        icon: "LogoIcon",
    },
    {
        Name: "Logging",
        routeName: "/student/logging",
        icon: "LogoIcon",
    },
    {
        Name: "Assessments",
        routeName: "/student/assess",
        icon: "LogoIcon",
    },
    {
        Name: "Documents",
        routeName: "/student/documents",
        icon: "LogoIcon",
    },
    {
        Name: "Settings",
        routeName: "/student/settings",
        icon: "LogoIcon",
    },
];
</script>

<template>
    <div>
        <Head title="Attachment Details" />
        <AuthenticatedLayout :nav-links="routeobject">
            <div class="px-8 py-4">
                <h1 class="font-[semibold] text-black-200 text-[1.25em]">
                    Attachment Details
                </h1>
                <div class="bg-white px-6">
                    <AttachmentFormDetails />
                </div>
            </div>
        </AuthenticatedLayout>
    </div>
</template>

<style scoped lang="scss"></style>
