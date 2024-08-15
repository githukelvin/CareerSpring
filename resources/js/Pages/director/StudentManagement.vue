<template>
    <Head title="Supervisor" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Dashboard</h1>
            <div class="p-4 bg-white">
                <div>
                    <h1 class="font-[semibold] text-base py-4">
                        Student Management
                    </h1>
                    <div>
                        <StudentManagementPartial />
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

import StudentManagementPartial from "@/Pages/director/partials/StudentManagementPartial.vue";

const routeobject = [
    {
        Name: "Dashboard",
        routeName: "/director",
        icon: "LogoIcon",
    },
    {
        Name: "Approvals",
        routeName: "/director/approval",
        icon: "LogoIcon",
    },
    {
        Name: "Student Management",
        routeName: "/director/students",
        icon: "LogoIcon",
    },
];
</script>

<style lang="scss" scoped></style>
