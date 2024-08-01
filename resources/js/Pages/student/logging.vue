<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import TextAreaComponent from "@/Components/TextAreaComponent.vue";
import ButtonSubmit from "@/Components/ButtonSubmit.vue";
const routeobject =[
    {
        'Name':'Dashboard',
        'routeName':'/student',
        'icon':'LogoIcon',
    },
    {
        'Name':'Attachment Details',
        'routeName':'/student/attachment',
        'icon':'LogoIcon',
    },
    {
        'Name':'Logging',
        'routeName':'/student/logging',
        'icon':'LogoIcon',
    },
    {
        'Name':'Assessments',
        'routeName':'/student/assess',
        'icon':'LogoIcon',
    }
    ,
    {
        'Name':'Documents',
        'routeName':'/student/documents',
        'icon':'LogoIcon',
    }
    ,
    {
        'Name':'Settings',
        'routeName':'/student/settings',
        'icon':'LogoIcon',
    }
]
const form = useForm({
    weekFrom:"",
    weekTo:"",
    dateFrom:"",
    dateTo:"",
    monday:"",
    tuesday:"",
    wednesday:"",
    thursday:"",
    friday:"",
    remarksbyAttachee:"",
    nameAttachee:"",
    dateAttachee:"",
    remarksSupervisor:"",
    nameSupervisor:"",
    dateSupervisor:"",
})

</script>

<template>
<Head title="E-logging"/>
<AuthenticatedLayout :nav-links="routeobject">
    <div class="px-8 py-4 ">
        <h1 class="font-[semibold] text-black-200 text-[1.25em] pb-4">Logging</h1>
        <div class="bg-white p-6">
            <h1 class="font-[medium] text-base text-black-200 py-4">Weekly industrial Attachment Records</h1>
            <form class="flex flex-col gap-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-row gap-3 w-full">
                        <InputLabel for="weekFrom" value="Week From:"/>

                        <TextInput
                            id="weekFrom"
                            v-model="form.weekFrom"
                            autocomplete="weekFrom"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.weekFrom" class="mt-2"/>

                    </div>
                    <div class="flex flex-row gap-3 w-full">
                        <InputLabel for="weekTo" value="Week To:"/>

                        <TextInput
                            id="weekTo"
                            v-model="form.weekTo"
                            autocomplete="weekTo"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.weekTo" class="mt-2"/>

                    </div>
                    <div class="flex flex-row gap-3 w-full">
                        <InputLabel for="dateFrom" value="Date From:"/>

                        <TextInput
                            id="dateFrom"
                            v-model="form.dateFrom"
                            autocomplete="datefrom"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.dateFrom" class="mt-2"/>

                    </div>
                    <div class="flex flex-row gap-3 w-full">
                        <InputLabel for="dateTo" value="Date To:"/>

                        <TextInput
                            id="dateTo"
                            v-model="form.dateTo"
                            autocomplete="fullname"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.dateTo" class="mt-2"/>

                    </div>

                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-row gap-3 w-full">
                        <InputLabel for="monday" value="Monday:"/>

                        <TextAreaComponent
                            id="monday"
                            v-model="form.monday"
                            placeholder="Enter the work done on this day"
                            autocomplete="fullname"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.monday" class="mt-2"/>

                    </div>
                    <div class="flex flex-row gap-3 w-full">
                        <InputLabel for="tuesday" value="Tuesday:"/>

                        <TextAreaComponent
                            id="tuesday"
                            v-model="form.tuesday"
                            placeholder="Enter the work done on this day"
                            autocomplete="fullname"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.tuesday" class="mt-2"/>

                    </div>
                    <div class="flex flex-row gap-3 w-full">
                        <InputLabel for="wednesday" value="Wednesday:"/>

                        <TextAreaComponent
                            id="wednesday"
                            v-model="form.wednesday"
                            placeholder="Enter the work done on this day"
                            autocomplete="fullname"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.wednesday" class="mt-2"/>

                    </div>
                    <div class="flex flex-row gap-3 w-full">
                        <InputLabel for="thursday" value="Thursday:"/>

                        <TextAreaComponent
                            id="thursday"
                            v-model="form.thursday"
                            placeholder="Enter the work done on this day"
                            autocomplete="fullname"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.thursday" class="mt-2"/>

                    </div>
                    <div class="flex flex-row gap-3 w-full">
                        <InputLabel for="friday" value="Friday:"/>

                        <TextAreaComponent
                            id="friday"
                            placeholder="Enter the work done on this day"
                            v-model="form.friday"
                            autocomplete="fullname"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.friday" class="mt-2"/>

                    </div>

                </div>

                <div>
                    <h1 class="text-base font-[semibold] text-black-200 py-2">Remarks by attachee</h1>
                    <div class="flex flex-col gap-3 w-full">
                        <InputLabel for="remarksbyAttachee" value="Comments:"/>

                        <TextAreaComponent
                            id="remarksbyAttachee"
                            placeholder="Attachee Remarks"
                            v-model="form.remarksbyAttachee"
                            autocomplete="fullname"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.remarksbyAttachee" class="mt-2"/>

                    </div>
                    <div class="flex flex-row gap-3 py-4">
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="nameAttachee" value="Name:"/>

                            <TextInput
                                id="nameAttachee"
                                v-model="form.nameAttachee"
                                autocomplete="fullname"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                placeholder="Your Name"
                                type="text"
                            />

                            <InputError :message="form.errors.nameAttachee" class="mt-2"/>

                        </div>
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="dateAttachee" value="Date:"/>

                            <TextInput
                                id="dateAttachee"
                                v-model="form.dateAttachee"
                                placeholder="Date"
                                autocomplete="date"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError :message="form.errors.dateAttachee" class="mt-2"/>

                        </div>


                    </div>

                </div>
                <div>
                    <h1 class="text-base py-3 font-[semibold] text-black-200">Part ii: To be Filled by the Industrial Attachment Supervisor</h1>
                    <div class="flex flex-col gap-3 w-full">
                        <InputLabel for="remarksSupervisor" value="Comments:"/>

                        <TextAreaComponent
                            id="remarksSupervisor"
                            placeholder="Supervisor`s remarks"
                            v-model="form.remarksSupervisor"
                            autocomplete="remarks Supervisor"
                            autofocus
                            class="mt-1 block w-full"
                            required
                            type="text"
                        />

                        <InputError :message="form.errors.remarksSupervisor" class="mt-2"/>

                    </div>
                    <div class="flex flex-row gap-3 py-4">
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="nameSupervisor" value="Name:"/>

                            <TextInput
                                id="nameSupervisor"
                                v-model="form.nameSupervisor"
                                autocomplete="name"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError :message="form.errors.nameSupervisor" class="mt-2"/>

                        </div>
                        <div class="flex flex-row gap-3 w-full">
                            <InputLabel for="dateSupervisor" value="Date:"/>

                            <TextInput
                                id="dateSupervisor"
                                v-model="form.dateSupervisor"
                                autocomplete="date"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError :message="form.errors.dateSupervisor" class="mt-2"/>

                        </div>


                    </div>

                </div>

<!--                div:actions-->
                <div class="flex flex-row gap-6">
                    <button-submit>Submit Log</button-submit>
                    <button class="bg-transparent border border-accent-200 text-black-200 px-4 py-2">view Submitted Logs</button>
                </div>
            </form>
        </div>

    </div>

</AuthenticatedLayout>
</template>

<style scoped lang="scss">

</style>
