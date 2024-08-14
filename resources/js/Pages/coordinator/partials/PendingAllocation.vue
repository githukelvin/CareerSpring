<script setup>
import ErrorComponent from "@/Pages/coordinator/partials/ErrorComponent.vue";
import { ref } from "vue";

const error = ref(false);
</script>

<template>
    <!-- Table -->
    <div class="relative">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            >
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                >
                    <tr>
                        <th class="px-6 py-3" scope="col">Student name</th>
                        <th class="px-6 py-3" scope="col">Department</th>
                        <th class="px-6 py-3" scope="col">Supervisor name</th>
                        <th class="px-6 py-3" scope="col">Start Date</th>
                        <th class="px-6 py-3" scope="col">End Date</th>
                        <th class="px-6 py-3" scope="col">Select Supervisor</th>
                        <th class="px-6 py-3" scope="col">Actions</th>
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
                        <td class="px-6 py-4">Silver</td>
                        <td class="px-6 py-4">Laptop</td>
                        <td class="px-6 py-4">$2999</td>
                        <td class="px-6 py-4">$2999</td>
                        <td class="px-6 py-4">
                            <label class="sr-only" for="underline_select"
                                >Underline select</label
                            >
                            <select
                                id="underline_select"
                                class="block py-2.5 px-0 w-full text-sm text-center text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                            >
                                <option selected>Choose a Supervisor</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </td>
                        <td
                            class="px-6 py-4 text-start text-sm text-primary-500 font-[regular]"
                        >
                            <button
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                type="submit"
                            >
                                Allocate
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->
    <div
        v-show="error"
        class="absolute w-svw modal inset-0"
        @click="error = !error"
    >
        <ErrorComponent />
    </div>
</template>

<style lang="scss" scoped></style>
