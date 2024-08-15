<template>
    <td
        :class="statusClass"
        class="px-6 py-4 whitespace-nowrap text-sm capitalize"
    >
        {{ status }}
    </td>
</template>

<script setup>
import { computed } from "vue";

const props = defineProps({
    status: {
        type: String,
        required: true,
    },
});

const statusClass = computed(() => {
    const lowercaseStatus = props.status.toLowerCase();
    if (lowercaseStatus.includes("pending")) {
        return "text-accent-200";
    } else if (
        lowercaseStatus.includes("approved") ||
        lowercaseStatus.includes("completed") ||
        lowercaseStatus.includes("done")
    ) {
        return "text-primary-500";
    } else {
        return "text-red-600";
    }
});
</script>
