<template>
    <div id="chart">
        <apexchart
            :options="chartOptions"
            :series="series"
            height="350"
            type="line"
        ></apexchart>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { usePage } from "@inertiajs/vue3";

const monthlyCounts = usePage().props.monthlyCounts;

for (let month = 1; month <= 12; month++) {
    // Check if the current month is already in the data array
    const existingMonth = monthlyCounts.find((item) => item.month === month);

    // If the month is not found, add it with student_count 0
    if (!existingMonth) {
        monthlyCounts.push({ month: month, student_count: 0 });
    }
}

// Sort the array by month to ensure the months are in order
monthlyCounts.sort((a, b) => a.month - b.month);

const chartData = [];

monthlyCounts.forEach((item) => {
    chartData.push(item.student_count);
    // You can use the value of student_count here as needed
});

const series = ref([
    {
        name: "Students",
        data: chartData,
    },
]);

const chartOptions = ref({
    chart: {
        height: 350,
        type: "line",
        zoom: {
            enabled: false,
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        curve: "straight",
    },
    title: {
        text: "Student Completion  trends  by month",
        align: "left",
    },
    grid: {
        row: {
            colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
            opacity: 0.5,
        },
    },
    xaxis: {
        categories: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],
    },
});
</script>
