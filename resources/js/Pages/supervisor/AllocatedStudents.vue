<template>
    <Head title="Assessments Visits" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Dashboard</h1>
            <div>
                <div class="flex flex-row justify-between">
                    <div>
                        <input
                            id=""
                            name=""
                            placeholder="Type  here to Search"
                            type="text"
                        />
                    </div>

                    <div>
                        <select id="" name="">
                            <option value="">Status</option>
                            <option value="">Status</option>
                            <option value="">Status</option>
                        </select>
                    </div>
                </div>
                <div class="bg-white py-6 mt-6">
                    <div>
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div
                                    class="p-1.5 min-w-full inline-block align-middle"
                                >
                                    <div class="overflow-hidden">
                                        <table
                                            class="min-w-full divide-y divide-neutral-200 dark:divide-neutral-700"
                                        >
                                            <thead class="bg-neutral-900">
                                                <tr>
                                                    <th
                                                        class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                        scope="col"
                                                    >
                                                        Student Name
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                        scope="col"
                                                    >
                                                        Department
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                        scope="col"
                                                    >
                                                        Start Date
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                        scope="col"
                                                    >
                                                        End Date
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                                        scope="col"
                                                    >
                                                        Assessment Status
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 text-center text-xs font-[semibold] text-black-200 uppercase"
                                                        scope="col"
                                                    >
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr
                                                    class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                                >
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                    >
                                                        John Brown
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        45
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        01-jan-2024
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        10-mar-2024
                                                    </td>
                                                    <StatusComponent
                                                        status="Not Accessed"
                                                    />
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                    >
                                                        <button
                                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                            type="button"
                                                        >
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                                >
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                    >
                                                        John Brown
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        45
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        01-jan-2024
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        10-mar-2024
                                                    </td>
                                                    <StatusComponent
                                                        status="Completed"
                                                    />
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                    >
                                                        <button
                                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                            type="button"
                                                        >
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                                >
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                    >
                                                        John Brown
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        45
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        01-jan-2024
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        10-mar-2024
                                                    </td>
                                                    <StatusComponent
                                                        status="pending"
                                                    />
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                    >
                                                        <button
                                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                            type="button"
                                                        >
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr
                                                    class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                                >
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                    >
                                                        John Brown
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        45
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        01-jan-2024
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        10-mar-2024
                                                    </td>
                                                    <StatusComponent
                                                        status="Not Accessed"
                                                    />
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                    >
                                                        <button
                                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                            type="button"
                                                        >
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
    <div v-show="confirm" class="absolute w-svw modal inset-0">
        <MarkAccessed @close-modal="confirm = !confirm" />
    </div>
</template>

<script setup>
import { ref } from "vue";

const confirm = ref(true);

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import StatusComponent from "@/Components/StatusComponent.vue";

import { Head } from "@inertiajs/vue3";
import AssessmentModal from "@/Components/AssessmentModal.vue";
import MarkAccessed from "@/Components/MarkAccessed.vue";

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
    {
        Name: "Logout",
        routeName: "/logout",
        icon: "LogoIcon",
    },
];
</script>

<style lang="scss" scoped></style>
