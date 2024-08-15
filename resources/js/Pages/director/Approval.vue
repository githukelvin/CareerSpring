<template>
    <Head title="Approvals" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Approvals</h1>

            <div>
                <div class="bg-white p-4">
                    <h1 class="font-[semibold] py-3 text-xl">
                        Student Application Status
                    </h1>

                    <TableApplication />
                </div>
                <div class="bg-white p-4 mt-7">
                    <h1 class="font-[semibold] py-3 text-xl">
                        Mark Students as Ready
                    </h1>

                    <ReadyStudents />
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
import TableApplication from "@/Pages/director/partials/TableApplication.vue";
import ReadyStudents from "@/Pages/director/partials/ReadyStudents.vue";

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
