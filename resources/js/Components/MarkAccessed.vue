<script setup>
import { defineEmits } from "vue";
import { Inertia } from "@inertiajs/inertia";

const emit = defineEmits(["closeModal"]);

const emitCloseModal = () => {
    emit("closeModal");
};

const props = defineProps({
    assessment: {
        type: Object,
        required: true,
    },
});
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
// const  assessment.assessment = assessment.assessment
</script>

<template>
    <div class="bg-white w-fit relative centermodal">
        <div
            class="flex flex-row justify-between py-4 px-3 border-b border-black-100"
        >
            <h1>Student Details</h1>
            <div
                class="h-[25px] cursor-pointer w-[25px] bg-cross-svg"
                @click="emitCloseModal"
            ></div>
        </div>

        <div class="p-4 grid place-items-center">
            <div class="curr p-4">
                <p>
                    Student name:{{
                        assessment.assessment[0].students.user.name
                    }}
                </p>
                <p>
                    department:
                    {{
                        assessment.assessment[0].students.training_institution
                            .department_name
                    }}
                </p>
                <p>
                    attachment start date:
                    {{
                        assessment.assessment[0].students.attachment.start_date
                    }}
                </p>
                <p>
                    attachment end date:
                    {{ assessment.assessment[0].students.attachment.end_date }}
                </p>
                <p>
                    Assessment Status:
                    {{ assessment.assessment[0].assessment_status }}
                </p>
            </div>

            <button
                class="bg-accent-200 mx-8 cursor-pointer text-black-100 py-2.5 px-6"
                type="submit"
                value=""
                @click="
                    markCompleted(assessment.assessment[0].students.student_id)
                "
            >
                Mark Assessment Completed
            </button>
        </div>
    </div>
</template>

<style scoped>
.curr p {
    @apply text-base py-2 capitalize;
}
</style>
