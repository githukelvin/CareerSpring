<script setup>
import ButtonSubmit from "@/Components/ButtonSubmit.vue";
import ButtonAll from "@/Components/ButtonAll.vue";
import { defineEmits, ref } from "vue";
import TextAreaComponent from "@/Components/TextAreaComponent.vue";

const visitNotes = ref("");
const emit = defineEmits(["closeModal"]);

const emitCloseModal = () => {
    emit("closeModal");
};
</script>

<template>
    <div class="bg-white max-w-xl relative centermodal">
        <div
            class="flex flex-row justify-between py-4 px-3 border-b border-black-100"
        >
            <h1>Assessment Visit Details</h1>
            <div
                @click="emitCloseModal"
                class="h-[25px] cursor-pointer w-[25px] bg-cross-svg"
            ></div>
        </div>

        <div class="curr px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Student Details:
            </h1>
            <p>Student name:kelvin githu</p>
            <p>department: communication & Computer networks</p>
            <p>attachment start date: 10-jan-2024</p>
            <p>attachment end date: 10-march-2024</p>
        </div>

        <div class="curr px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Visit Details:
            </h1>
            <p>Visit Date: 01-Feb-2024</p>
            <p>Visit Status:Pending</p>
        </div>

        <div class="px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Visit Notes:
            </h1>
            <form action="" class="w-vw">
                <text-area-component
                    placeholder="Visit Notes"
                    :model-value="visitNotes"
                />

                <!--            action group-->
                <div
                    class="py-3 px-4 flex flex-row justify-between items-center"
                >
                    <button-submit> Save Notes </button-submit>

                    <button-all> Mark Completed </button-all>
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
