<script setup>
defineProps({
    value: {
        type: String,
    },
});
</script>

<template>
    <label class="flex w-[200px] flex-row font-medium text-sm text-gray-700">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
