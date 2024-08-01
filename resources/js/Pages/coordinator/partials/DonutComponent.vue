<template>
    <apexchart type="donut" :options="chartOptions" :series="series"></apexchart>
</template>

<script setup>
import { ref } from 'vue';
import VueApexCharts from 'vue3-apexcharts';

const series = [44, 55, 41, 17, 15];

const chartOptions = ref({
    chart: {
        type: 'donut',
    },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
});
</script>
