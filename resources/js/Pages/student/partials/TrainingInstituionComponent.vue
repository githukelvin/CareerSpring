<script setup>
import {useForm} from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import ButtonSubmit from "@/Components/ButtonSubmit.vue";

const form = useForm({
    nameFacultyDean: '',
    nameFaculty: '',
    contact: '',
    telNo: '',
    nameSchool: '',
    nameDirector: '',
    telNoDirector: '',
    emailDirector: '',
    nameDepartment: '',
    nameChairperson: '',
    telNoChairperson: '',
    emailChairperson: '',
})
</script>

<template>
    <div class="bg-white px-8 py-6">
        <h1 class="font-[semibold] text-sm text-black-200 py-2">Training Institution</h1>
        <form class="flex flex-col gap-5" action="" method="post">
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="nameFacultyDean" value="Name of Faculty Dean:"/>

                <TextInput
                    id="nameFacultyDean"
                    v-model="form.nameFacultyDean"
                    autocomplete="Faculty dean"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.nameFacultyDean" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="nameFaculty" value="Name of Faculty:"/>

                <TextInput
                    id="nameFaculty"
                    v-model="form.nameFaculty"
                    autocomplete="name faculty"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.nameFaculty" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="contact" value="Contact  Address:"/>

                <TextInput
                    id="contact"
                    v-model="form.contact"
                    autocomplete="contact"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.contact" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNo" value="Tel No:"/>

                <TextInput
                    id="telNo"
                    v-model="form.telNo"
                    autocomplete="Tel No"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.telNo" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="nameSchool" value="Name od School:"/>

                <TextInput
                    id="nameSchool"
                    v-model="form.nameSchool"
                    autocomplete="School"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.nameSchool" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="nameDirector" value="Name of Director:"/>

                <TextInput
                    id="nameDirector"
                    v-model="form.nameDirector"
                    autocomplete="Director"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.nameDirector" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNoDirector" value="Tel No:"/>

                <TextInput
                    id="telNoDirector"
                    v-model="form.telNoDirector"
                    autocomplete="tel no"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.telNoDirector" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="emailDirector" value="Email:"/>

                <TextInput
                    id="emailDirector"
                    v-model="form.emailDirector"
                    autocomplete="Email"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="email"
                />

                <InputError :message="form.errors.emailDirector" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="nameDepartment" value="Name of Department:"/>

                <TextInput
                    id="nameDepartment"
                    v-model="form.nameDepartment"
                    autocomplete="deparment"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.nameDepartment" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="nameChairperson" value="Name of Chairperson:"/>

                <TextInput
                    id="nameChairperson"
                    v-model="form.nameChairperson"
                    autocomplete="Chairperson"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.nameChairperson" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNoChairperson" value="Tel No:"/>

                <TextInput
                    id="telNoChairperson"
                    v-model="form.telNoChairperson"
                    autocomplete="tel no"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.telNoChairperson" class="mt-2"/>
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="emailChairperson" value="Last Name:"/>

                <TextInput
                    id="emailChairperson"
                    v-model="form.emailChairperson"
                    autocomplete="email chairperson"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="email"
                />

                <InputError :message="form.errors.emailChairperson" class="mt-2"/>
            </div>
<!--            div  actions-->
            <div>
                <button-submit>
                    Save
                </button-submit>
            </div>
        </form>
    </div>

</template>

<style scoped lang="scss">

</style>
