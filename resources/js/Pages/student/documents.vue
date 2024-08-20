<script setup>
import { Head, useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ButtonSubmit from "@/Components/ButtonSubmit.vue";
import FlashMessageComponent from "@/Components/FlashMessageComponent.vue";
import { Inertia } from "@inertiajs/inertia";

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
];
const form = useForm({
    recommendation_letter: null,
    final_report: null,
});

const handleFileUpload = (event, fieldName) => {
    form[fieldName] = event.target.files[0];
};

const submitForm = () => {
    form.post(route("student.documents.upload"), {
        onSuccess: () => {
            // Show a success message using Inertia's flash messages
            Inertia.reload({ only: ["flash"], preserveScroll: true });
            alert("Files have been successfully uploaded.");
        },
        onError: () => {
            alert("There was an error uploading the files.");
        },
    });
};
</script>

<template>
    <Head title="Documents" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 py-4">
            <h1 class="font-[semibold] text-black-200 text-[1.25em] pb-4">
                Documents
            </h1>
            <FlashMessageComponent />

            <div class="bg-white p-6">
                <h1 class="font-[medium] text-base text-black-200 py-4">
                    Weekly industrial Attachment Records
                </h1>
                <form
                    enctype="multipart/form-data"
                    @submit.prevent="submitForm"
                >
                    <div class="mb-3">
                        <div>
                            <label
                                class="block mb-2 text-sm font-[medium] text-black-200 dark:text-black-200"
                                for="file_input"
                                >Recommendation Letter:</label
                            >
                            <input
                                id="file_input"
                                accept=".pdf,.doc,.docx"
                                class="block w-7/12 file:text-base file:text-neutral-900 file:px-5 file:h-full file:bg-neutral-300 text-sm file:border-0 h-[50px] text-gray-900 border border-neutral-500 font-[medium] text-[0.875em] file:mr-6 text-neutral-700 cursor-pointer focus:outline-none"
                                type="file"
                                @change="
                                    handleFileUpload(
                                        $event,
                                        'recommendation_letter',
                                    )
                                "
                            />
                        </div>
                        <div class="mt-4">
                            <label
                                class="block mb-2 text-sm font-[medium] text-gray-900 dark:text-black-200"
                                for="file_input"
                                >Final Report:</label
                            >
                            <input
                                id="file_input"
                                accept=".pdf,.doc,.docx"
                                class="block w-7/12 file:h-full file:text-base file:bg-neutral-300 file:text-neutral-900 file:px-5 text-sm file:border-0 h-[50px] text-gray-900 border border-neutral-500 font-[medium] text-[0.875em] file:mr-6 text-neutral-700 cursor-pointer focus:outline-none"
                                type="file"
                                @change="
                                    handleFileUpload($event, 'final_report')
                                "
                            />
                        </div>
                    </div>

                    <ButtonSubmit> Submit Documents</ButtonSubmit>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style lang="scss" scoped></style>
