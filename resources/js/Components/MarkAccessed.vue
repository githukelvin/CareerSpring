<script setup>
import { defineEmits } from "vue";

const emit = defineEmits(["closeModal"]);

const emitCloseModal = () => {
    emit("closeModal");
};
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
                <p>Student name:kelvin githu</p>
                <p>department: communication & Computer networks</p>
                <p>attachment start date: 10-jan-2024</p>
                <p>attachment end date: 10-march-2024</p>
                <p>Assessment Status: Completed</p>
            </div>

            <button
                class="bg-accent-200 mx-8 cursor-pointer text-black-100 py-2.5 px-6"
                type="submit"
                value=""
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
