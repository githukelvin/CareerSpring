<template>
    <Head title="Allocations" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">
                Student Supervisor Allocations
            </h1>
            <p>Manage and allocate supervisors for students on attachment</p>
            <!--            div:assigned-->
            <FlashMessageComponent />
            <div
                v-show="success"
                class="flex my-3 px-4 flex-row justify-between items-center py-4 bg-[rgb(172,207,189)]/70"
            >
                <p class="text-primary-500">
                    Success! Supervisor allocated to the student.
                </p>

                <div
                    class="cursor-pointer h-[20px] w-[20px] bg-cross-svg"
                ></div>
            </div>
            <!-- div:  filters -->
            <div class="flex flex-row justify-between items-center">
                <div>
                    <input
                        id=""
                        name=""
                        placeholder="Type to  search"
                        type="text"
                    />
                </div>
                <div>
                    <select id="" name="">
                        <option value="department">Department</option>
                        <option value="department">Department</option>
                        <option value="department">Department</option>
                    </select>
                </div>
            </div>
            <!--            {{ assessments[0].students.training_institution.department_name  }}-->
            <!-- div:end filter -->
            <div>
                <div class="bg-primary-500 w-full py-4 mt-6 tabs">
                    <button
                        :class="{ active: activeTab === 'allocated' }"
                        class="text-[1.125em] pl-9 text-white font-[medium]"
                        @click="activeTab = 'allocated'"
                    >
                        Allocated Supervisors
                    </button>
                    <button
                        :class="{ active: activeTab === 'pending' }"
                        class="text-[1.125em] pl-9 text-white font-[medium]"
                        @click="activeTab = 'pending'"
                    >
                        Pending Allocations
                    </button>
                </div>

                <!--                Tables-->
                <div>
                    <AllocatedSupervisor
                        v-if="activeTab === 'allocated'"
                        :allocations="assessments"
                        @readiness-marked="handleReadinessMarked"
                        @cancel-click="confirm = !confirm"
                    />
                    <PendingAllocation
                        v-if="activeTab === 'pending'"
                        :pending-allocations="pendingAllocations"
                    />
                </div>
                <!--                End Tables-->
            </div>
        </div>
    </AuthenticatedLayout>

    <div v-show="confirm" class="absolute w-svw modal inset-0">
        <ModalAllocateSupervisor
            :allocations="modalData"
            @close-modal="confirm = !confirm"
        />
    </div>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, usePage } from "@inertiajs/vue3";
import AllocatedSupervisor from "@/Pages/coordinator/partials/AllocatedSupervisor.vue";
import PendingAllocation from "@/Pages/coordinator/partials/PendingAllocation.vue";
import { ref } from "vue";
import ModalAllocateSupervisor from "@/Pages/coordinator/partials/ModalAllocateSupervisor.vue";
import FlashMessageComponent from "@/Components/FlashMessageComponent.vue";

const lecturers = usePage().props.lecturers;
const students = usePage().props.students;
const assessments = usePage().props.assessments;

const pendingAllocations = {
    lecturers: lecturers,
    students: students,
};

const confirm = ref(false);

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
    {
        Name: "Logout",
        routeName: "/logout",
        icon: "LogoIcon",
    },
];
const activeTab = ref("allocated");
const success = ref(false);

const modalData = ref({});
const handleReadinessMarked = (data) => {
    modalData.value = data;
    // console.log("Readiness marked with data:", data);
};
</script>

<style scoped>
.active {
    @apply text-accent-200;
}
</style>
