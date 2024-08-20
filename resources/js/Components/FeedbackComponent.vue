<script setup>
import ButtonSubmit from "@/Components/ButtonSubmit.vue";
import { defineEmits, reactive, ref } from "vue";
import InputLabel from "@/Components/InputLabel.vue";

const visitNotes = ref("");
const emit = defineEmits(["closeModal"]);

const emitCloseModal = () => {
    emit("closeModal");
};
const form = reactive({
    feedback: "",
    performance: "",
});
const props = defineProps({
    taskType: {
        type: String,
        required: true,
    },
    assessment: {
        type: Object,
        required: true,
    },
});

const submitForm = async (assid) => {
    try {
        const response = await axios.post(route("supervisor.assess", assid), {
            feedback: form.feedback,
            performance: "B+",
            assessment_id: assid,
        });
        console.log("Assessment updated successfully", response.data);
        alert("Assessment updated successfully");
        emitCloseModal();
        // Inertia.reload();
        // Handle success (e.g., show a notification)
    } catch (error) {
        console.error("Error updating assessment", error.response.data);
        // Handle error (e.g., show error message)
    }
};
</script>

<template>
    <div class="bg-white mt-16 max-w-xl relative centermodal">
        <div
            class="flex flex-row justify-between py-4 px-3 border-b border-black-100"
        >
            <h1>Task Details</h1>
            <!--            {{ assessment.assessment[0] }}-->
            <div
                class="h-[25px] cursor-pointer w-[25px] bg-cross-svg"
                @click="emitCloseModal"
            ></div>
        </div>

        <div class="curr px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Task Type: {{ taskType }}
            </h1>
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Student Details:
            </h1>
            <p>
                Student name:{{ assessment.assessment[0].students.user.name }}
            </p>
            <p>
                department:
                {{
                    assessment.assessment[0].students.training_institution
                        .department_name
                }}
            </p>
            <p>
                contact:{{
                    assessment.assessment[0].students.attachment.phone_number
                }}
            </p>
        </div>

        <div class="curr px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Attachment Details:
                {{ assessment.assessment[0].students.student_id }}
            </h1>
            <p>
                Company:
                {{ assessment.assessment[0].students.attachment.company_name }}
            </p>
            <p>
                Start Date:{{
                    assessment.assessment[0].students.attachment.start_date
                }}
            </p>
            <p>
                End Date:{{
                    assessment.assessment[0].students.attachment.end_date
                }}
            </p>
        </div>

        <div class="px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Assessment Form:
            </h1>
            <form
                class="w-vw"
                @submit.prevent="submitForm(assessment.assessment[0].id)"
            >
                <div>
                    <!--                    <div class="flex flex-row mt-4">-->
                    <!--                        <InputLabel for="perfomance" value="Peformance:" />-->

                    <!--                        <textarea-->
                    <!--                            id=""-->
                    <!--                            ref="textarea"-->
                    <!--                            v-model="form.performance"-->
                    <!--                            :placeholder="placeholder"-->
                    <!--                            class="w-full"-->
                    <!--                            cols="30"-->
                    <!--                            name=""-->
                    <!--                            placeholder="perfomance"-->
                    <!--                            rows="5"-->
                    <!--                        ></textarea>-->
                    <!--                    </div>-->
                    <div class="flex flex-row mt-4">
                        <InputLabel for="Comments" value="Comments:" />

                        <textarea
                            id=""
                            ref="textarea"
                            v-model="form.feedback"
                            :placeholder="placeholder"
                            class="w-full"
                            cols="30"
                            name=""
                            placeholder="Visit Notes"
                            rows="5"
                        ></textarea>
                    </div>
                </div>

                <!--            action group-->
                <div
                    class="py-3 px-4 flex flex-row justify-between items-center"
                >
                    <button-submit :disabled="form.processing">
                        Save Notes
                    </button-submit>

                    <!--                    <button-all> Mark Completed</button-all>-->
                </div>
            </form>
        </div>
    </div>
</template>

<style scoped>
.curr p {
    @apply text-base py-2 capitalize;
}
</style>
