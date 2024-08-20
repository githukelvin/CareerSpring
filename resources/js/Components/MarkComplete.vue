<script setup>
import ButtonSubmit from "@/Components/ButtonSubmit.vue";
import ButtonAll from "@/Components/ButtonAll.vue";
import { Inertia } from "@inertiajs/inertia";

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

const props = defineProps({
    student_id: {
        type: Number,
    },
});
</script>

<template>
    <div class="bg-white w-[20em] relative centermodal py-10 px-8">
        <h1 class="font-[semibold] text-base text-center">
            Confirm Completion
        </h1>
        <p class="font-[regular] text-sm text-center">
            Are you sure you want to mark this task as complete?
        </p>

        <!--        action:group-->
        <div class="flex flex-row mt-5 justify-between">
            <button-submit @click="markCompleted(student_id)">
                Confirm</button-submit
            >

            <button-all>Cancel</button-all>
        </div>
    </div>
</template>

<style lang="scss" scoped></style>
