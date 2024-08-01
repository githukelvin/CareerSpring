<template>
    <Head title="Coordinator" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl ">Dashboard</h1>
            <div class="grid grid-cols-4 gap-3 py-7">
                <div class="bg-white p-5 flex flex-row justify-between">
                  <div class="">
                      <p class="font-[medium] text-sm">Total Students on Attachments</p>
                      <h1 class="font-[bold] text-[2em]">115</h1>
                  </div>
                    <StudentIcon/>

                </div>

                <div class="bg-white p-5 flex flex-row justify-between">
                    <div class="">
                        <p class="font-[medium] text-sm">Total Completed Attachments</p>
                        <h1 class="font-[bold] text-[2em]">100</h1>
                    </div>
                    <TickIcon/>

                </div>

                <div class="bg-white p-5 flex flex-row justify-between">
                    <div class="">
                        <p class="font-[medium] text-sm">Pending Allocations</p>
                        <h1 class="font-[bold] text-[2em]">10</h1>
                    </div>
                    <PendingAllocationIcon/>

                </div>

                <div class="bg-white p-5 flex flex-row justify-between">
                    <div class="">
                        <p class="font-[medium] text-sm">Pending Tasks</p>
                        <h1 class="font-[bold] text-[2em]">5</h1>
                    </div>
                    <PendingTasksIcon/>

                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";
import StudentIcon from "@/Components/icons/StudentIcon.vue";
import TickIcon from "@/Components/icons/TickIcon.vue";
import PendingAllocationIcon from "@/Components/icons/PendingAllocationIcon.vue";
import PendingTasksIcon from "@/Components/icons/PendingTasksIcon.vue";

const routeobject =[
    {
        'Name':'Dashboard',
        'routeName':'/coordinator',
        'icon':'LogoIcon',
    },
    {
        'Name':'Analytics',
        'routeName':'coordinator/analytics',
        'icon':'LogoIcon',
    },
    {
        'Name':'Allocation',
        'routeName':'coordinator/allocation',
        'icon':'LogoIcon',
    },
    {
        'Name':'Settings',
        'routeName':'coordinator/settings',
        'icon':'LogoIcon',
    }
    ,

]

</script>

<style lang="scss" scoped>

</style>
