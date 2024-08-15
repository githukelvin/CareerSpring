<script setup>
import { defineEmits } from "vue";

const emit = defineEmits(["cancelClick"]);

const emitCancelClick = () => {
    emit("cancelClick");
};
</script>

<template>
    <!-- Table -->
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            >
                <thead class="text-xs text-gray-700 uppercase bg-neutral-700">
                    <tr>
                        <th class="px-6 py-3" scope="col">Student name</th>
                        <th class="px-6 py-3" scope="col">Department</th>
                        <th class="px-6 py-3" scope="col">
                            Attachment Designation
                        </th>

                        <th class="px-6 py-3" scope="col">Start Date</th>
                        <th class="px-6 py-3" scope="col">End Date</th>
                        <th class="px-6 py-3" scope="col">level</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                    >
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-black-200 dark:text-black-200"
                            scope="row"
                        >
                            Apple MacBook Pro 17"
                        </td>
                        <td class="px-6 py-4">CCN</td>
                        <td class="px-6 py-4">Nyandarua County Offices</td>
                        <td class="px-6 py-4">10-jan-2024</td>
                        <td class="px-6 py-4">10-jan-2024</td>

                        <td
                            class="px-6 py-4 text-start text-sm text-primary-500 font-[regular]"
                        >
                            Degreee
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->
</template>

<style lang="scss" scoped></style>
