<template>
    <Head title="Allocated Students" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Assessment Visits</h1>
            <div class="mt-6">
                <div class="flex flex-row justify-between">
                    <div>
                        <input
                            type="text"
                            name=""
                            placeholder="Type  here to Search"
                            id=""
                        />
                    </div>

                    <div>
                        <select name="" id="">
                            <option value="">Status</option>
                            <option value="">Status</option>
                            <option value="">Status</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6 bg-white p-4">
                    <TablePartial />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
    <div v-show="confirm" class="absolute w-svw modal inset-0">
        <AssessmentModal @close-modal="confirm = !confirm" />
    </div>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import StudentIcon from "@/Components/icons/StudentIcon.vue";
import TickIcon from "@/Components/icons/TickIcon.vue";
import PendingAllocationIcon from "@/Components/icons/PendingAllocationIcon.vue";
import PendingTasksIcon from "@/Components/icons/PendingTasksIcon.vue";
import AssesmentVisits from "@/Components/icons/AssesmentVisits.vue";
import TablePartial from "@/Pages/supervisor/partials/TablePartial.vue";
import ModalAllocateSupervisor from "@/Pages/coordinator/partials/ModalAllocateSupervisor.vue";
import { ref } from "vue";
import AssessmentModal from "@/Components/AssessmentModal.vue";

const confirm = ref(true);
const routeobject = [
    {
        Name: "Dashboard",
        routeName: "/supervisor",
        icon: "LogoIcon",
    },
    {
        Name: "Allocated Students",
        routeName: "/supervisor/allocatedStudents",
        icon: "LogoIcon",
    },
    {
        Name: "Assessment Visit",
        routeName: "/supervisor/assessmentVisits",
        icon: "LogoIcon",
    },
    {
        Name: "Pending Tasks",
        routeName: "/supervisor/pendingTasks",
        icon: "LogoIcon",
    },
];
</script>

<style lang="scss" scoped></style>
