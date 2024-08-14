<script setup>
const emit = defineEmits(["closeModal"]);

const emitCloseModal = () => {
    emit("closeModal");
};
</script>

<template>
    <button
        class="bg-transparent border border-accent-200 text-black-200 px-4 py-2"
        @click="emitCloseModal"
    >
        <slot />
    </button>
</template>

<style lang="scss" scoped></style>
