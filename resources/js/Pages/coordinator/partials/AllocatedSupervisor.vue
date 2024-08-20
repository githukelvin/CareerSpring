<script setup>
import { defineEmits, ref } from "vue";

const emit = defineEmits(["cancelClick", "readiness-marked"]);

const emitCancelClick = () => {
    emit("cancelClick");
};
const props = defineProps({
    allocations: {
        type: Object,
        required: true,
    },
});

const lecturers = ref([]);
const students = ref([]);
const assessments = ref([]);
const loading = ref(true);
// Declare the event with defineEmits
const fetchData = async (student_id) => {
    try {
        const response = await axios.get(
            route("coordinator.reallocate", student_id),
        );
        emitCancelClick();

        emit("readiness-marked", response.data);
    } catch (error) {
        console.error("Error fetching allocation data:", error);
    }
};
// fetchData(student_id);
</script>

<template>
    <!-- Table -->
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            >
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                >
                    <tr>
                        <th class="px-6 py-3" scope="col">Student name</th>
                        <th class="px-6 py-3" scope="col">Department</th>
                        <th class="px-6 py-3" scope="col">Supervisor name</th>
                        <th class="px-6 py-3" scope="col">Start Date</th>
                        <th class="px-6 py-3" scope="col">End Date</th>
                        <th class="px-6 py-3" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="assessment in allocations"
                        :key="assessment.id"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    >
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-black-200 dark:text-black-200"
                            scope="row"
                        >
                            {{ assessment.students.user.name }}
                        </td>
                        <td class="px-6 py-4">
                            {{
                                assessment.students.training_institution
                                    .department_name
                            }}
                        </td>
                        <td class="px-6 py-4">
                            <!--                            {{ // allocations.assessments.lecturers.user.name  }}-->
                            {{ assessment.lecturers.user.name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ assessment.students.attachment.start_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ assessment.students.attachment.end_date }}
                        </td>
                        <td
                            class="px-6 py-4 text-start text-sm text-primary-500 font-[regular]"
                        >
                            <!--                             fetchData(
                                        assessment.students.student_id,
                                    ),-->
                            <button
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                @click="
                                    fetchData(assessment.students.student_id)
                                "
                            >
                                Reallocate
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->
</template>

<style lang="scss" scoped></style>
