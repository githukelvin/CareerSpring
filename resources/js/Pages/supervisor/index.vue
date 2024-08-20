<template>
    <Head title="Supervisor" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Dashboard</h1>
            <div class="grid grid-cols-3 gap-3 py-7">
                <div class="bg-white p-5 flex flex-row justify-between">
                    <div class="">
                        <p class="font-[medium] text-sm">Allocated Students</p>
                        <h1 class="font-[bold] text-[2em]">
                            {{ studentCount }}
                        </h1>
                    </div>
                    <StudentIcon />
                </div>

                <div class="bg-white p-5 flex flex-row justify-between">
                    <div class="">
                        <p class="font-[medium] text-sm">Assessment Visits</p>
                        <h1 class="font-[bold] text-[2em]">100</h1>
                    </div>
                    <AssesmentVisits />
                </div>

                <div class="bg-white p-5 flex flex-row justify-between">
                    <div class="">
                        <p class="font-[medium] text-sm">Pending Tasks</p>
                        <h1 class="font-[bold] text-[2em]">5</h1>
                    </div>
                    <PendingTasksIcon />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, usePage } from "@inertiajs/vue3";
import StudentIcon from "@/Components/icons/StudentIcon.vue";
import TickIcon from "@/Components/icons/TickIcon.vue";
import PendingAllocationIcon from "@/Components/icons/PendingAllocationIcon.vue";
import PendingTasksIcon from "@/Components/icons/PendingTasksIcon.vue";
import AssesmentVisits from "@/Components/icons/AssesmentVisits.vue";

const routeobject = [
    {
        Name: "Dashboard",
        routeName: "/supervisor",
        icon: "LogoIcon",
    },
    {
        Name: "Allocated Students",
        routeName: "supervisor/allocatedStudents",
        icon: "LogoIcon",
    },
    {
        Name: "Assessment Visit",
        routeName: "supervisor/assessmentVisits",
        icon: "LogoIcon",
    },
    {
        Name: "Pending Tasks",
        routeName: "supervisor/pendingTasks",
        icon: "LogoIcon",
    },
    {
        Name: "Logout",
        routeName: "/logout",
        icon: "LogoIcon",
    },
];
const studentCount = usePage().props.studentCount;
</script>

<style lang="scss" scoped></style>
