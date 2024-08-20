<template>
    <div id="chart">
        <apexchart
            :options="chartOptions"
            :series="series"
            height="350"
            type="bar"
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
        name: "students",
        data: chartData,
    },
]);

const chartOptions = ref({
    chart: {
        height: 350,
        type: "bar",
    },
    plotOptions: {
        bar: {
            borderRadius: 0,
            dataLabels: {
                position: "top",
            },
        },
    },
    dataLabels: {
        enabled: true,
        formatter: (val) => `${val}`,
        offsetY: -20,
        style: {
            fontSize: "12px",
            colors: ["#304758"],
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
        position: "bottom",
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        crosshairs: {
            fill: {
                type: "gradient",
                gradient: {
                    colorFrom: "#D8E3F0",
                    colorTo: "#BED1E6",
                    stops: [0, 100],
                    opacityFrom: 0.4,
                    opacityTo: 0.5,
                },
            },
        },
        tooltip: {
            enabled: true,
        },
    },
    yaxis: {
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        labels: {
            show: false,
            formatter: (val) => `${val}`,
        },
    },
    title: {
        text: "Student Completion in each Month",
        floating: false,
        offsetY: 0,
        align: "center",
        style: {
            color: "#444",
        },
    },
});
</script>
