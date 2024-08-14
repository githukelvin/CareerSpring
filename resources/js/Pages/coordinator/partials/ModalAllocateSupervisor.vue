<script setup>
import ButtonSubmit from "@/Components/ButtonSubmit.vue";
import ButtonAll from "@/Components/ButtonAll.vue";
import { defineEmits } from "vue";

const emit = defineEmits(["closeModal"]);

const emitCloseModal = () => {
    emit("closeModal");
};
</script>

<template>
    <div class="bg-white max-w-xl relative centermodal">
        <div
            class="flex flex-row justify-between py-4 px-3 border-b border-black-100"
        >
            <h1>Reallocate Supervisor for Mark Johnson</h1>
            <div
                @click="emitCloseModal"
                class="h-[25px] cursor-pointer w-[25px] bg-cross-svg"
            ></div>
        </div>

        <div class="curr px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Current allocation:
            </h1>
            <p>Student name:kelvin githu</p>
            <p>current supervisor: prof Kandeo otieno</p>
            <p>department: communication & Computer networks</p>
            <p>attachment start date: 10-jan-2024</p>
            <p>attachment end date: 10-march-2024</p>
        </div>

        <div class="px-4">
            <h1 class="font-[semibold] text-[1.125em] capitalize">
                Select new supervisor:
            </h1>
            <form action="">
                <table
                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                >
                    <thead
                        class="text-xs text-gray-700 uppercase border-b border-black-200 bg-gray-50 bg-neutral-200 dark:text-gray-400"
                    >
                        <tr>
                            <th scope="col" class="px-6 py-3">Supervisor</th>
                            <th scope="col" class="px-6 py-3">Department</th>
                            <th scope="col" class="px-6 py-3">
                                Current allocations
                            </th>
                            <th scope="col" class="px-6 py-3">select</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b border-neutral-700">
                            <td
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-black-200 dark:text-black-200"
                            >
                                Apple MacBook Pro 17"
                            </td>
                            <td class="px-6 py-4">Silver</td>
                            <td class="px-6 py-4">Laptop</td>

                            <td
                                class="px-6 py-4 text-start text-sm text-primary-500 font-[regular]"
                            >
                                <button
                                    class="font-medium text-blue-600 bg-transparent dark:text-blue-500 hover:underline"
                                >
                                    Select
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-neutral-700">
                            <td
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-black-200 dark:text-black-200"
                            >
                                Apple MacBook Pro 17"
                            </td>
                            <td class="px-6 py-4">Silver</td>
                            <td class="px-6 py-4">Laptop</td>

                            <td
                                class="px-6 py-4 text-start text-sm text-primary-500 font-[regular]"
                            >
                                <button
                                    class="font-medium text-blue-600 bg-transparent dark:text-blue-500 hover:underline"
                                >
                                    Select
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-white border-b border-neutral-700">
                            <td
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-black-200 dark:text-black-200"
                            >
                                Apple MacBook Pro 17"
                            </td>
                            <td class="px-6 py-4">Silver</td>
                            <td class="px-6 py-4">Laptop</td>

                            <td
                                class="px-6 py-4 text-start text-sm text-primary-500 font-[regular]"
                            >
                                <button
                                    class="font-medium text-blue-600 bg-transparent dark:text-blue-500 hover:underline"
                                >
                                    Select
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--            action group-->
                <div
                    class="py-3 px-4 flex flex-row justify-between items-center"
                >
                    <button-submit> Save </button-submit>

                    <button-all @click="emitCloseModal"> Cancel </button-all>
                </div>
            </form>
        </div>
    </div>
</template>

<style scoped>
.curr p {
    @apply text-base py-2 capitalize;
}
</style>
