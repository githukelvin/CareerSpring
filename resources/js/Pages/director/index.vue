<template>
    <Head title="Supervisor" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Dashboard</h1>
            <div class="grid grid-cols-3 gap-3 py-7">
                <div class="bg-white p-5 flex flex-row justify-between">
                    <div class="">
                        <p class="font-[medium] text-sm">Total Students</p>
                        <h1 class="font-[bold] text-[2em]">115</h1>
                    </div>
                    <StudentIcon />
                </div>

                <div class="bg-white p-5 flex flex-row justify-between">
                    <div class="">
                        <p class="font-[medium] text-sm">
                            Application Pending Approval
                        </p>
                        <h1 class="font-[bold] text-[2em]">100</h1>
                    </div>
                    <PendingAllocationIcon />
                </div>

                <div class="bg-white p-5 flex flex-row justify-between">
                    <div class="">
                        <p class="font-[medium] text-sm">
                            Approved Application
                        </p>
                        <h1 class="font-[bold] text-[2em]">5</h1>
                    </div>
                    <TickIcon />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import StudentIcon from "@/Components/icons/StudentIcon.vue";
import TickIcon from "@/Components/icons/TickIcon.vue";
import PendingAllocationIcon from "@/Components/icons/PendingAllocationIcon.vue";
import PendingTasksIcon from "@/Components/icons/PendingTasksIcon.vue";
import AssesmentVisits from "@/Components/icons/AssesmentVisits.vue";

const routeobject = [
    {
        Name: "Dashboard",
        routeName: "/director",
        icon: "LogoIcon",
    },
    {
        Name: "Approvals",
        routeName: "director/approval",
        icon: "LogoIcon",
    },
    {
        Name: "Student Management",
        routeName: "director/students",
        icon: "LogoIcon",
    },
    {
        Name: "Logout",
        routeName: "/logout",
        icon: "LogoIcon",
    },
];
</script>

<style lang="scss" scoped></style>
