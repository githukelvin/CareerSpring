<script setup>
const model = defineModel({
    type: String,
    required: true,
});

const prop = defineProps({
    placeholder: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <textarea
        id=""
        ref="textarea"
        v-model="model"
        :placeholder="placeholder"
        class="w-full"
        cols="30"
        name=""
        rows="5"
    ></textarea>
</template>

<style lang="scss" scoped></style>
