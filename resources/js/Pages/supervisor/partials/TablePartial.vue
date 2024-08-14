<script setup>
import { ref } from "vue";
import StatusComponent from "@/Components/StatusComponent.vue";
import ErrorComponent from "@/Pages/coordinator/partials/ErrorComponent.vue";

const error = ref(false);
</script>

<template>
    <div>
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table
                            class="min-w-full divide-y divide-neutral-200 dark:divide-neutral-700"
                        >
                            <thead class="bg-neutral-900">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                        scope="col"
                                    >
                                        Student Name
                                    </th>
                                    <th
                                        class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                        scope="col"
                                    >
                                        Department
                                    </th>
                                    <th
                                        class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                        scope="col"
                                    >
                                        Visit Date
                                    </th>
                                    <th
                                        class="px-6 py-3 text-start text-xs font-[semibold] text-black-200 uppercase"
                                        scope="col"
                                    >
                                        Status
                                    </th>
                                    <th
                                        class="px-6 py-3 text-center text-xs font-[semibold] text-black-200 uppercase"
                                        scope="col"
                                    >
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                >
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                    >
                                        John Brown
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                    >
                                        45
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                    >
                                        New York No. 1 Lake Park
                                    </td>
                                    <StatusComponent status="pending" />
                                    <td
                                        class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                    >
                                        <button
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                            type="button"
                                        >
                                            View Details
                                        </button>
                                        <button
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                            type="button"
                                        >
                                            Mark Completed
                                        </button>
                                    </td>
                                </tr>
                                <tr
                                    class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                >
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                    >
                                        John Brown
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                    >
                                        45
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                    >
                                        New York No. 1 Lake Park
                                    </td>
                                    <StatusComponent status="completed" />
                                    <td
                                        class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                    >
                                        <button
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                            type="button"
                                        >
                                            View Details
                                        </button>
                                        <button
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                            type="button"
                                        >
                                            Mark Completed
                                        </button>
                                    </td>
                                </tr>
                                <tr
                                    class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                >
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                    >
                                        John Brown
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                    >
                                        45
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                    >
                                        New York No. 1 Lake Park
                                    </td>
                                    <StatusComponent status="pending" />
                                    <td
                                        class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                    >
                                        <button
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                            type="button"
                                        >
                                            View Details
                                        </button>
                                        <button
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                            type="button"
                                        >
                                            Mark Completed
                                        </button>
                                    </td>
                                </tr>
                                <tr
                                    class="odd:bg-white even:bg-neutral-400 hover:bg-gray-100 dark:even:bg-neutral-100 dark:hover:bg-neutral-400"
                                >
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-[regular] text-gray-800 text-black-200"
                                    >
                                        John Brown
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                    >
                                        45
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 text-black-200"
                                    >
                                        New York No. 1 Lake Park
                                    </td>
                                    <StatusComponent status="completed" />
                                    <td
                                        class="px-6 py-4 whitespace-nowrap flex flex-row gap-7 text-end text-sm font-[regular]"
                                    >
                                        <button
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-bluish hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                            type="button"
                                        >
                                            View Details
                                        </button>
                                        <button
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-primary-500 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400"
                                            type="button"
                                        >
                                            Mark Completed
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        v-show="error"
        class="absolute w-svw modal inset-0"
        @click="error = !error"
    >
        <ErrorComponent />
    </div>
</template>

<style lang="scss" scoped></style>
