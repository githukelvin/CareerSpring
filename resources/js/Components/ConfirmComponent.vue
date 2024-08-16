<script setup>
import { defineEmits, ref } from "vue";

const emit = defineEmits(["cancelClick"]);

const emitCancelClick = () => {
    emit("cancelClick");
};
const loading = ref(false);
const markReadiness = async () => {
    loading.value = true;
    try {
        const response = await axios.post(`/student/assess`);
        // Emit event to inform parent component
        emit("readiness-marked", response.data);
    } catch (error) {
        console.error("There was an error marking readiness:", error);
    } finally {
        loading.value = false;
    }
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
                <button
                    :disabled="loading"
                    class="text-black-200 bg-accent-200 py-3 px-5"
                    @click="markReadiness"
                >
                    {{ loading ? "Marking..." : "Confirm" }}
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

<style lang="scss" scoped></style>
