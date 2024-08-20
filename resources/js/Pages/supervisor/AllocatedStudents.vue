<template>
    <Head title="Assessments Visits" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Allocated Students</h1>
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
                                                    v-for="assess in assessments"
                                                    :key="assess.id"
                                                    class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                                >
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                    >
                                                        {{
                                                            assess.students.user
                                                                .name
                                                        }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        {{
                                                            assess.students
                                                                .training_institution
                                                                .department_name
                                                        }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        {{
                                                            assess.students
                                                                .attachment
                                                                .start_date
                                                        }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                    >
                                                        {{
                                                            assess.students
                                                                .attachment
                                                                .end_date
                                                        }}
                                                    </td>
                                                    <StatusComponent
                                                        :status="
                                                            assess.assessment_status
                                                        "
                                                    />
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                    >
                                                        <button
                                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                            type="button"
                                                            @click="
                                                                viewDetails(
                                                                    assess
                                                                        .students
                                                                        .student_id,
                                                                )
                                                            "
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
        <MarkAccessed
            :assessment="assessment"
            @close-modal="confirm = !confirm"
        />
    </div>
</template>

<script setup>
import { ref } from "vue";

const confirm = ref(false);

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import StatusComponent from "@/Components/StatusComponent.vue";

import { Head, usePage } from "@inertiajs/vue3";
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
const assessment = ref({});
const viewDetails = async (student_id) => {
    confirm.value = true;
    try {
        const response = await axios.get(
            route("supervisor.viewdetails", student_id),
        );
        assessment.value = response.data;
        console.log(assessment.value);
    } catch (error) {
        console.error("Error fetching allocation data:", error);
    }
};
const assessments = usePage().props.assessments;
</script>

<style lang="scss" scoped></style>
