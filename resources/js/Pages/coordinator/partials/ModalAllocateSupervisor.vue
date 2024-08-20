<script setup>
import { defineEmits, ref } from "vue";
import ButtonSubmit from "@/Components/ButtonSubmit.vue";
import ButtonAll from "@/Components/ButtonAll.vue";
import { Inertia } from "@inertiajs/inertia";

const emit = defineEmits(["closeModal"]);

const emitCloseModal = () => {
    emit("closeModal");
};
const props = defineProps({
    allocations: {
        type: Object,
        required: true,
    },
});

const selectedLecturers = ref({});

const handleSelectChange = (student_id, event) => {
    // Clear previously selected lecturer for this student
    Object.keys(selectedLecturers.value).forEach((id) => {
        if (id !== student_id) {
            selectedLecturers.value[id] = null; // or delete selectedLecturers.value[id];
        }
    });

    // Set the new lecturer for this student
    selectedLecturers.value[student_id] = event.target.value;
};

const reallocate = async (student_id) => {
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
        alert(error);
        console.error("There was an error allocating supervisor:", error);
        // Optionally set error.value to true here to show the ErrorComponent
    }
};
</script>

<template>
    <div class="bg-white max-w-xl sticky centermodal">
        <div
            class="flex flex-row justify-between py-4 px-3 border-b border-black-100"
        >
            <h1>
                Reallocate Supervisor for
                {{ allocations.assessments.students.user.name }}
            </h1>
            <div
                class="h-[25px] cursor-pointer w-[25px] bg-cross-svg"
                @click="emitCloseModal"
            ></div>
        </div>

        <div class="curr px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Current allocation:
            </h1>
            <p>Student name:{{ allocations.assessments.students.user.name }}</p>
            <p>
                current supervisor:
                {{ allocations.assessments.lecturers.user.name }}
            </p>
            <p>
                department:
                {{
                    allocations.assessments.students.training_institution
                        .department_name
                }}
            </p>
            <p>
                attachment start date:
                {{ allocations?.assessments.students.attachment.start_date }}
            </p>
            <p>
                attachment end date:
                {{ allocations?.assessments.students.attachment.end_date }}
            </p>
        </div>

        <div class="px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Select new supervisor:
            </h1>
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            >
                <thead
                    class="text-xs text-gray-700 uppercase border-b border-black-200 bg-gray-50 bg-neutral-200 dark:text-gray-400"
                >
                    <tr>
                        <th class="px-6 py-3" scope="col">Supervisor</th>
                        <th class="px-6 py-3" scope="col">Department</th>
                        <th class="px-6 py-3" scope="col">
                            Current allocations
                        </th>
                        <th class="px-6 py-3" scope="col">select</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-for="lecturer in allocations?.lecturers"
                        :key="lecturer.lecturer_id"
                        class="bg-white border-b border-neutral-700"
                    >
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-black-200 dark:text-black-200"
                            scope="row"
                        >
                            {{ lecturer?.user.name }}
                        </td>
                        <td class="px-6 py-4">
                            {{
                                allocations.assessments?.students
                                    .training_institution.department_name
                            }}
                        </td>
                        <td class="px-6 py-4">
                            {{ lecturer?.student_count }}
                        </td>

                        <td
                            class="px-6 py-4 text-start text-sm text-primary-500 font-[regular]"
                        >
                            <button
                                :value="lecturer?.lecturer_id"
                                class="font-medium text-blue-600 bg-transparent dark:text-blue-500 hover:underline"
                                @click="
                                    handleSelectChange(
                                        allocations?.assessments.students
                                            .student_id,
                                        $event,
                                    )
                                "
                            >
                                Select
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--            action group-->
            <div class="py-3 px-4 flex flex-row justify-between items-center">
                <button-submit
                    @click="
                        reallocate(allocations?.assessments.students.student_id)
                    "
                >
                    Save
                </button-submit>

                <button-all @click="emitCloseModal"> Cancel</button-all>
            </div>
        </div>
    </div>
</template>

<style scoped>
.curr p {
    @apply text-base py-2 capitalize;
}
</style>

<!--<template>-->
<!--    <div class="max-w-xl bg-red-600 h-72 sticky centermodal">-->
<!--        <div-->
<!--            class="flex flex-row justify-between py-4 px-3 border-b border-black-100"-->
<!--        >-->
<!--            <h1 class="text-black-200">-->
<!--                Reallocate Supervisor for-->
<!--                {{ allocations.assessments.students.user.name }}-->
<!--            </h1>-->
<!--            <div-->
<!--                class="h-[25px] cursor-pointer w-[25px] bg-cross-svg"-->
<!--                @click="emitCloseModal"-->
<!--            ></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->

<!--<style lang="scss" scoped></style>-->
