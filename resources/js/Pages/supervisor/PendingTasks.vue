<template>
    <Head title="PendingTasks" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Pending Tasks</h1>

            <div class="bg-white py-6 mt-4">
                <h1 class="font-[semibold] text-xl p-3">Pending Assessments</h1>
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
                                                    Task Type
                                                </th>
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
                                                    Due Date
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
                                                v-for="task in pendingtasks"
                                                :key="task.id"
                                                class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                            >
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    Assessment
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    {{
                                                        task.students.user.name
                                                    }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                                >
                                                    {{
                                                        task.students
                                                            .training_institution
                                                            .department_name
                                                    }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                                >
                                                    {{
                                                        task.students.attachment
                                                            .end_date
                                                    }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                                >
                                                    <button
                                                        class="inline-flex items-center cursor-pointer gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                        @click="
                                                            viewDetails(
                                                                task.students
                                                                    .student_id,
                                                            )
                                                        "
                                                    >
                                                        View Details
                                                    </button>
                                                    <button
                                                        class="inline-flex cursor-pointer items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                                        type="button"
                                                        @click="
                                                            markCompleted(
                                                                task.students
                                                                    .student_id,
                                                            )
                                                        "
                                                    >
                                                        Mark Completed
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
    </AuthenticatedLayout>

    <div v-show="assessment" class="absolute w-svw h-full modal inset-0">
        <FeedbackComponent
            :assessment="assessmentData"
            task-type="Assessment"
            @emitCloseModal="assessment = !assessment"
        />
    </div>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, usePage } from "@inertiajs/vue3";
import StatusComponent from "@/Components/StatusComponent.vue";
import { ref } from "vue";
import MarkAccessed from "@/Components/MarkAccessed.vue";
import FeedbackComponent from "@/Components/FeedbackComponent.vue";
import MarkComplete from "@/Components/MarkComplete.vue";
import { Inertia } from "@inertiajs/inertia";

const assessment = ref(false);

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
const markCompleted = async (student_id) => {
    confirm.value = true;
    try {
        const response = await axios.get(
            route("supervisor.markComplete", student_id),
        );
        alert(response.data.message);
        Inertia.reload();
    } catch (error) {
        console.error("Error fetching allocation data:", error);
    }
};

const assessmentData = ref({});

const viewDetails = async (student_id) => {
    assessment.value = true;
    try {
        const response = await axios.get(
            route("supervisor.viewdetails", student_id),
        );
        assessmentData.value = response.data;
        console.log(assessmentData.value);
    } catch (error) {
        console.error("Error fetching allocation data:", error);
    }
};

const pendingtasks = usePage().props.pendingTasks;
</script>

<style lang="scss" scoped></style>
