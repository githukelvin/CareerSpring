<script setup>
import { defineEmits } from "vue";

const emit = defineEmits(["cancelClick"]);

const emitCancelClick = () => {
    emit("cancelClick");
};
</script>

<template>
    <div class="absolute top-50 left-[50%]">
        <div class="bg-white p-10 w-fit">
            <h1 class="font-[medium] text-center text-base py-2">
                Confirm Assessment Readiness
            </h1>
            <p class="text-center font-[medium] text-sm">
                Are you sure you want to mark your <br />
                assessment as ready?
            </p>
            <!--    Div:actions-->
            <div class="flex flex-row gap-6 py-2">
                <button class="text-black-200 bg-accent-200 py-3 px-5">
                    Confirm
                </button>
                <button
                    class="text-black-200 bg-transparent border border-accent-200 py-3 px-6"
                    @click="emitCancelClick"
                >
                    Cancel
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss"></style>
