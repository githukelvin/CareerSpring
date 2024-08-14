<script setup>
import ButtonSubmit from "@/Components/ButtonSubmit.vue";
import ButtonAll from "@/Components/ButtonAll.vue";
import { defineEmits, ref } from "vue";
import TextAreaComponent from "@/Components/TextAreaComponent.vue";
import InputLabel from "@/Components/InputLabel.vue";

const visitNotes = ref("");
const emit = defineEmits(["closeModal"]);

const emitCloseModal = () => {
    emit("closeModal");
};

const props = defineProps({
    taskType: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <div class="bg-white mt-16 max-w-xl relative centermodal">
        <div
            class="flex flex-row justify-between py-4 px-3 border-b border-black-100"
        >
            <h1>Task Details</h1>
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
            <p>Student name:kelvin githu</p>
            <p>department: communication & Computer networks</p>
            <p>contact: 10-jan-2024</p>
        </div>

        <div class="curr px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Attachment Details:
            </h1>
            <p>Company: Nyandarua</p>
            <p>Start Date: 01-Feb-2024</p>
            <p>End Date: 01-Feb-2024</p>
        </div>

        <div class="px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Assessment Form:
            </h1>
            <form action="" class="w-vw">
                <div>
                    <div class="flex flex-row mt-4">
                        <InputLabel for="perfomance" value="Peformance:" />
                        <text-area-component
                            :model-value="visitNotes"
                            placeholder="Visit Notes"
                        />
                    </div>
                    <div class="flex flex-row mt-4">
                        <InputLabel for="Comments" value="Comments:" />
                        <text-area-component
                            :model-value="visitNotes"
                            placeholder="Visit Notes"
                        />
                    </div>
                </div>

                <!--            action group-->
                <div
                    class="py-3 px-4 flex flex-row justify-between items-center"
                >
                    <button-submit> Save Notes</button-submit>

                    <button-all> Mark Completed</button-all>
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
