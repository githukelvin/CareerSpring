<script setup>
import { Head, useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import TextAreaComponent from "@/Components/TextAreaComponent.vue";
import FlashMessageComponent from "@/Components/FlashMessageComponent.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

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
    week_number: "",
    date_from: "",
    date_to: "",
    monday: "",
    tuesday: "",
    wednesday: "",
    thursday: "",
    friday: "",
    student_remarks: "",
    supervisor_name: "",
    supervisor_remarks: "",
});

const submit = () => {
    form.post(route("student.logging.store"), {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <Head title="E-logging" />
    <AuthenticatedLayout :nav-links="routeobject">
        <div class="px-8 py-4">
            <h1 class="font-[semibold] text-black-200 text-[1.25em] pb-4">
                Logging
            </h1>
            <FlashMessageComponent />
            <div class="bg-white p-6">
                <h1 class="font-[medium] text-base text-black-200 py-4">
                    Weekly industrial Attachment Records
                </h1>
                <form class="flex flex-col gap-6" @submit.prevent="submit">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="weekFrom" value="Week Number:" />

                            <TextInput
                                id="weekFrom"
                                v-model="form.week_number"
                                autocomplete="week_number"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.week_number"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="dateFrom" value="Date From:" />

                            <TextInput
                                id="dateFrom"
                                v-model="form.date_from"
                                autocomplete="datefrom"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.date_from"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="dateTo" value="Date To:" />

                            <TextInput
                                id="dateTo"
                                v-model="form.date_to"
                                autocomplete="fullname"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.date_to"
                                class="mt-2"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="monday" value="Monday:" />

                            <TextAreaComponent
                                id="monday"
                                v-model="form.monday"
                                autocomplete="fullname"
                                autofocus
                                class="mt-1 block w-full"
                                placeholder="Enter the work done on this day"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.monday"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="tuesday" value="Tuesday:" />

                            <TextAreaComponent
                                id="tuesday"
                                v-model="form.tuesday"
                                autocomplete="fullname"
                                autofocus
                                class="mt-1 block w-full"
                                placeholder="Enter the work done on this day"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.tuesday"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="wednesday" value="Wednesday:" />

                            <TextAreaComponent
                                id="wednesday"
                                v-model="form.wednesday"
                                autocomplete="fullname"
                                autofocus
                                class="mt-1 block w-full"
                                placeholder="Enter the work done on this day"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.wednesday"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="thursday" value="Thursday:" />

                            <TextAreaComponent
                                id="thursday"
                                v-model="form.thursday"
                                autocomplete="fullname"
                                autofocus
                                class="mt-1 block w-full"
                                placeholder="Enter the work done on this day"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.thursday"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="friday" value="Friday:" />

                            <TextAreaComponent
                                id="friday"
                                v-model="form.friday"
                                autocomplete="fullname"
                                autofocus
                                class="mt-1 block w-full"
                                placeholder="Enter the work done on this day"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.friday"
                                class="mt-2"
                            />
                        </div>
                    </div>

                    <div>
                        <h1
                            class="text-base font-[semibold] text-black-200 py-2"
                        >
                            Remarks by attachee
                        </h1>
                        <div class="flex flex-col gap-3 w-full">
                            <InputLabel
                                for="remarksbyAttachee"
                                value="Comments:"
                            />

                            <TextAreaComponent
                                id="remarksbyAttachee"
                                v-model="form.student_remarks"
                                autocomplete="fullname"
                                autofocus
                                class="mt-1 block w-full"
                                placeholder="Attachee Remarks"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.student_remarks"
                                class="mt-2"
                            />
                        </div>
                        <!--                        <div class="flex flex-row gap-3 py-4">-->
                        <!--                            <div class="flex flex-row gap-3 w-full">-->
                        <!--                                <InputLabel for="nameAttachee" value="Name:" />-->

                        <!--                                <TextInput-->
                        <!--                                    id="nameAttachee"-->
                        <!--                                    v-model="form.nameAttachee"-->
                        <!--                                    autocomplete="fullname"-->
                        <!--                                    autofocus-->
                        <!--                                    class="mt-1 block w-full"-->
                        <!--                                    placeholder="Your Name"-->
                        <!--                                    required-->
                        <!--                                    type="text"-->
                        <!--                                />-->

                        <!--                                <InputError-->
                        <!--                                    :message="form.errors.nameAttachee"-->
                        <!--                                    class="mt-2"-->
                        <!--                                />-->
                        <!--                            </div>-->
                        <!--                            &lt;!&ndash;                            <div class="flex flex-row gap-3 w-full">&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                <InputLabel for="dateAttachee" value="Date:" />&ndash;&gt;-->

                        <!--                            &lt;!&ndash;                                <TextInput&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                    id="dateAttachee"&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                    v-model="form.dateAttachee"&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                    autocomplete="date"&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                    autofocus&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                    class="mt-1 block w-full"&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                    placeholder="Date"&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                    required&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                    type="text"&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                />&ndash;&gt;-->

                        <!--                            &lt;!&ndash;                                <InputError&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                    :message="form.errors.dateAttachee"&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                    class="mt-2"&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                                />&ndash;&gt;-->
                        <!--                            &lt;!&ndash;                            </div>&ndash;&gt;-->
                        <!--                        </div>-->
                    </div>
                    <div>
                        <h1
                            class="text-base py-3 font-[semibold] text-black-200"
                        >
                            Part ii: To be Filled by the Industrial Attachment
                            Supervisor
                        </h1>
                        <div class="flex flex-col gap-3 w-full">
                            <InputLabel
                                for="remarksSupervisor"
                                value="Comments:"
                            />

                            <TextAreaComponent
                                id="remarksSupervisor"
                                v-model="form.supervisor_remarks"
                                autocomplete="remarks Supervisor"
                                autofocus
                                class="mt-1 block w-full"
                                placeholder="Supervisor`s remarks"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.supervisor_remarks"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 py-4">
                            <div class="flex flex-row gap-3 w-full">
                                <InputLabel
                                    for="nameSupervisor"
                                    value="Name:"
                                />

                                <TextInput
                                    id="nameSupervisor"
                                    v-model="form.supervisor_name"
                                    autocomplete="name"
                                    autofocus
                                    class="mt-1 block w-full"
                                    required
                                    type="text"
                                />

                                <InputError
                                    :message="form.errors.nameSupervisor"
                                    class="mt-2"
                                />
                            </div>
                            <!--                            <div class="flex flex-row gap-3 w-full">-->
                            <!--                                <InputLabel-->
                            <!--                                    for="dateSupervisor"-->
                            <!--                                    value="Date:"-->
                            <!--                                />-->

                            <!--                                <TextInput-->
                            <!--                                    id="dateSupervisor"-->
                            <!--                                    v-model="form.dateSupervisor"-->
                            <!--                                    autocomplete="date"-->
                            <!--                                    autofocus-->
                            <!--                                    class="mt-1 block w-full"-->
                            <!--                                    required-->
                            <!--                                    type="text"-->
                            <!--                                />-->

                            <!--                                <InputError-->
                            <!--                                    :message="form.errors.dateSupervisor"-->
                            <!--                                    class="mt-2"-->
                            <!--                                />-->
                            <!--                            </div>-->
                        </div>
                    </div>

                    <!--                div:actions-->
                    <div class="flex flex-row gap-6">
                        <PrimaryButton
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                            class="ms-4"
                        >
                            Submit Log
                        </PrimaryButton>
                        <button
                            class="bg-transparent border border-accent-200 text-black-200 px-4 py-2"
                        >
                            view Submitted Logs
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style lang="scss" scoped></style>
