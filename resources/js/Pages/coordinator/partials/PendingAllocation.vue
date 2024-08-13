<script setup>

import ModalAllocateSupervisor from "@/Pages/coordinator/partials/ModalAllocateSupervisor.vue";
import ErrorComponent from "@/Pages/coordinator/partials/ErrorComponent.vue";
import {ref} from "vue";
const error = ref(false)
</script>

<template>
    <!-- Table -->
    <div class="relative">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        Student name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Department
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Supervisor name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Start Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        End Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Select Supervisor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>

                </tr>
                </thead>
                <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-black-200 dark:text-black-200">
                        Apple MacBook Pro 17"
                    </td>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <select  name="" id="">
                            <option value="sa">Salesio  Kandeo</option>
                            <option value="sa">Salesio  Kandeo</option>
                            <option value="sa">Salesio  Kandeo</option>
                            <option value="sa">Salesio  Kandeo</option>
                        </select>
                    </td>
                    <td class="px-6 py-4 text-start text-sm text-primary-500 font-[regular] ">
                        <button type="submit"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Allocate</button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>


    </div>
    <!-- Table End -->
    <div v-show="error"  class="absolute w-svw  modal inset-0 " >
        <ErrorComponent/>
    </div>
</template>

<style scoped lang="scss">

</style>
