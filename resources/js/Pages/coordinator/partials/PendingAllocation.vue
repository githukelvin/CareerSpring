<script setup>
import ErrorComponent from "@/Pages/coordinator/partials/ErrorComponent.vue";
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";

const error = ref(false);
const props = defineProps({
    pendingAllocations: {
        type: Object,
        required: true,
    },
});

// Create a map to store selected lecturer for each student
const selectedLecturers = ref({});

const allocateSupervisor = async (student_id) => {
    const selectedLecturer = selectedLecturers.value[student_id];
    if (!selectedLecturer) {
        alert("Please select a supervisor first");
        return;
    }
    let data = {
        student_id: student_id,
        lecturer_id: selectedLecturer,
    };

    try {
        const response = await axios.post(route("coordinator.allocate"), data);
        Inertia.reload({ only: ["flash"], preserveScroll: true });
    } catch (error) {
        alert("");
        console.error("There was an error allocating supervisor:", error);
        // Optionally set error.value to true here to show the ErrorComponent
    }
};

const handleSelectChange = (student_id, event) => {
    selectedLecturers.value[student_id] = event.target.value;
};
</script>

<template>
    <!-- Table -->
    <div class="relative">
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
                        <th class="px-6 py-3" scope="col">Start Date</th>
                        <th class="px-6 py-3" scope="col">End Date</th>
                        <th class="px-6 py-3" scope="col">Select Supervisor</th>
                        <th class="px-6 py-3" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="student in pendingAllocations.students"
                        :key="student.student_id"
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    >
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-black-200 dark:text-black-200"
                            scope="row"
                        >
                            {{ student.user.name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ student.training_institution.department_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ student.attachment.start_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ student.attachment.end_date }}
                        </td>
                        <td class="px-6 py-4">
                            <label
                                :for="'underline_select_' + student.student_id"
                                class="sr-only"
                                >Underline select</label
                            >
                            <select
                                :id="'underline_select_' + student.student_id"
                                class="block py-2.5 px-0 w-full text-sm text-start font-[regular] text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                                @change="
                                    (event) =>
                                        handleSelectChange(
                                            student.student_id,
                                            event,
                                        )
                                "
                            >
                                <option disabled selected value="">
                                    Choose a Supervisor
                                </option>
                                <option
                                    v-for="lecturer in pendingAllocations.lecturers"
                                    :key="lecturer.id"
                                    :value="lecturer.lecturer_id"
                                >
                                    {{ lecturer.user.name }}
                                </option>
                            </select>
                        </td>
                        <td
                            class="px-6 py-4 text-start text-sm text-primary-500 font-[regular]"
                        >
                            <button
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                type="button"
                                @click="allocateSupervisor(student.student_id)"
                            >
                                Allocate
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->
    <div
        v-show="error"
        class="absolute w-svw modal inset-0"
        @click="error = !error"
    >
        <ErrorComponent />
    </div>
</template>

<style lang="scss" scoped></style>
