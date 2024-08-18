<script setup>
import { useForm } from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = useForm({
    faculty_dean_name: "",
    faculty_name: "",
    contact_address: "",
    tel_no: "",
    school_name: "",
    director_name: "",
    director_email: "",
    department_name: "",
    chairperson_name: "",
    chairperson_tel: "",
    email_chairperson: "",
});

const submit = () => {
    form.post(route("student.training"), {
        // onFinish: () => form.reset(),
    });
};
</script>

<template>
    <div class="bg-white px-8 py-6">
        <h1 class="font-[semibold] text-sm text-black-200 py-2">
            Training Institution
        </h1>
        <form class="flex flex-col gap-5" @submit.prevent="submit">
            <div class="flex flex-row gap-3 w-full">
                <InputLabel
                    for="faculty_dean_name"
                    value="Name of Faculty Dean:"
                />

                <TextInput
                    id="faculty_dean_name"
                    v-model="form.faculty_dean_name"
                    autocomplete="Faculty dean"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.faculty_dean_name"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="faculty_name" value="Name of Faculty:" />

                <TextInput
                    id="faculty_name"
                    v-model="form.faculty_name"
                    autocomplete="name faculty"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.faculty_name" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="contact" value="Contact  Address:" />

                <TextInput
                    id="contact"
                    v-model="form.contact_address"
                    autocomplete="contact_address"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.contact_address"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNo" value="Tel No:" />

                <TextInput
                    id="telNo"
                    v-model="form.tel_no"
                    autocomplete="Tel No"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.tel_no" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="nameSchool" value="Name of School:" />

                <TextInput
                    id="nameSchool"
                    v-model="form.school_name"
                    autocomplete="School"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.school_name" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="nameDirector" value="Name of Director:" />

                <TextInput
                    id="nameDirector"
                    v-model="form.nameDirector"
                    autocomplete="Director"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.nameDirector" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNoDirector" value="Tel No:" />

                <TextInput
                    id="telNoDirector"
                    v-model="form.director_name"
                    autocomplete="tel no"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.director_name" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="emailDirector" value="Email:" />

                <TextInput
                    id="emailDirector"
                    v-model="form.director_email"
                    autocomplete="Email"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="email"
                />

                <InputError
                    :message="form.errors.director_email"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="nameDepartment" value="Name of Department:" />

                <TextInput
                    id="nameDepartment"
                    v-model="form.department_name"
                    autocomplete="deparment"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.department_name"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel
                    for="nameChairperson"
                    value="Name of Chairperson:"
                />

                <TextInput
                    id="nameChairperson"
                    v-model="form.chairperson_name"
                    autocomplete="Chairperson"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.chairperson_name"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNoChairperson" value="Tel No:" />

                <TextInput
                    id="telNoChairperson"
                    v-model="form.chairperson_tel"
                    autocomplete="tel no"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.chairperson_tel"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="emailChairperson" value="Chairperson Email:" />

                <TextInput
                    id="emailChairperson"
                    v-model="form.email_chairperson"
                    autocomplete="email chairperson"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="email"
                />

                <InputError
                    :message="form.errors.email_chairperson"
                    class="mt-2"
                />
            </div>
            <!--            div  actions-->
            <div>
                <PrimaryButton
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    class="ms-4"
                >
                    Save
                </PrimaryButton>
            </div>
        </form>
    </div>
</template>

<style lang="scss" scoped></style>
