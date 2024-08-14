<template>
    <Head title="Analytics" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Analytics</h1>
            <div class="flex flex-col gap-6">
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-white py-3 px-4">
                        <ColumnChart />
                    </div>
                    <div class="bg-white py-3 px-4">
                        <DonutComponent />
                    </div>
                </div>
                <div class="bg-white py-3 px-4">
                    <LineChart />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

const routeobject = [
    {
        Name: "Dashboard",
        routeName: "/coordinator",
        icon: "LogoIcon",
    },
    {
        Name: "Analytics",
        routeName: "/coordinator/analytics",
        icon: "LogoIcon",
    },
    {
        Name: "Allocation",
        routeName: "/coordinator/allocation",
        icon: "LogoIcon",
    },
    {
        Name: "Settings",
        routeName: "/coordinator/settings",
        icon: "LogoIcon",
    },
    {
        Name: "Log Out",
        routeName: "/coordinator/logout",
        icon: "LogoIcon",
    },
];

import { ref } from "vue";
import VueApexCharts from "vue3-apexcharts";
import ColumnChart from "@/Pages/coordinator/partials/ColumnChart.vue";
import DonutComponent from "@/Pages/coordinator/partials/DonutComponent.vue";
import LineChart from "@/Pages/coordinator/partials/LineChart.vue";
</script>

<style lang="scss" scoped></style>
