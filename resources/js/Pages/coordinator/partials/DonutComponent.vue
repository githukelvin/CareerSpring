<template>
    <apexchart
        :options="chartOptions"
        :series="series"
        type="donut"
    ></apexchart>
</template>

<script setup>
import { ref } from "vue";
import { usePage } from "@inertiajs/vue3";

// Retrieve the number of students with and without attachments from props
const studentsWithAttachments = usePage().props.studentsWithAttachments;
const studentsWithoutAttachments = usePage().props.studentsWithoutAttachments;

// Set up the series data for the donut chart
const series = [studentsWithAttachments, studentsWithoutAttachments];

// Define the chart options
const chartOptions = ref({
    chart: {
        type: "donut",
    },
    responsive: [
        {
            breakpoint: 480,
            options: {
                chart: {
                    width: 200,
                },
                legend: {
                    position: "bottom",
                },
            },
        },
    ],
    labels: ["With Attachments", "Without Attachments"], // Labels for each slice
    dataLabels: {
        enabled: true, // Enable data labels
        formatter: function (val) {
            return val.toFixed(2) + "%"; // Format data labels as percentages
        },
        style: {
            fontSize: "14px",
            fontFamily: "Helvetica, Arial, sans-serif",
            colors: ["#333"],
        },
    },
    legend: {
        position: "right",
    },
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: "Total",
                        formatter: () =>
                            studentsWithAttachments +
                            studentsWithoutAttachments,
                    },
                },
            },
        },
    },
});
</script>
