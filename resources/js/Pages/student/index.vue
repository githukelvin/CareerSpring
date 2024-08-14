<script setup>
import { Head, Link } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import UploadImage from "@/Pages/student/partials/UploadImage.vue";
import PersonalInformationComponent from "@/Pages/student/partials/PersonalInformationComponent.vue";
import TrainingInstituionComponent from "@/Pages/student/partials/TrainingInstituionComponent.vue";
import AttachmentInformationComponent from "@/Pages/student/partials/AttachmentInformationComponent.vue";
import { computed, ref } from "vue";

const value = ref(50);

const rangeStyle = computed(() => ({
    background: `linear-gradient(to right, green 0%, green ${value.value}%, #e5e7eb ${value.value}%, #e5e7eb 100%)`,
}));

const routeobject = [
    {
        Name: "Dashboard",
        routeName: "/student",
        icon: "LogoIcon",
    },
    {
        Name: "Attachment Details",
        routeName: "/student/attachment",
        icon: "LogoIcon",
    },
    {
        Name: "Logging",
        routeName: "/student/logging",
        icon: "LogoIcon",
    },
    {
        Name: "Assessments",
        routeName: "/student/assess",
        icon: "LogoIcon",
    },
    {
        Name: "Documents",
        routeName: "/student/documents",
        icon: "LogoIcon",
    },
    {
        Name: "Settings",
        routeName: "/student/settings",
        icon: "LogoIcon",
    },
    {
        Name: "Logout",
        routeName: "/logout",
        icon: "LogoIcon",
    },
];
</script>

<template>
    <Head title="Student Dashboard" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 pt-4">
            <h1 class="font-[semibold] text-xl">Dashboard</h1>
            <div class="flex flex-col gap-10">
                <div class="grid lg:grid-cols-3 gap-6">
                    <div class="p-4 bg-white flex flex-row justify-between">
                        <div>
                            <p class="font-[semibold]">Application Status</p>
                            <h1
                                class="text-primary-400 text-2xl py-6 font-[bold]"
                            >
                                Completed
                            </h1>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col gap-4 bg-white">
                        <p class="font-[semibold]">Attachment Progress</p>
                        <h1 class="text-2xl text-black-200 font-[bold]">
                            {{ value }}% Completed
                        </h1>
                        <input
                            type="range"
                            name="range"
                            id="range"
                            min="0"
                            max="100"
                            :value="value"
                            class="w-full h-3 bg-gray-200 appearance-none cursor-pointer [&::-webkit-slider-thumb]:appearance-none [&::-moz-range-thumb]:appearance-none"
                            :style="rangeStyle"
                        />
                    </div>
                    <div class="bg-white p-4 flex flex-col gap-4">
                        <p class="font-[bold]">Weekly Logbook</p>
                        <h1 class="text-2xl text-black-200 font-[bold]">
                            Week 8
                        </h1>
                        <Link class="font-[medium]] text-xl text-accent-200"
                            >Add New Entry</Link
                        >
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-[20em_auto] mb-12 gap-10">
                        <div>
                            <UploadImage />
                        </div>
                        <div>
                            <PersonalInformationComponent />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <TrainingInstituionComponent />
                        </div>
                        <div>
                            <AttachmentInformationComponent />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style lang="scss" scoped></style>
