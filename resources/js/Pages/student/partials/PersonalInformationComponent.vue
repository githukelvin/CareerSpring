<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import { useForm } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = useForm({
    admin_no: "",
    gender: "",
    id_no: "",
    dob: "",
    course: "",
    level: "",
    year: "",
    home_address: "",
    tel_no: "",
    next_of_kin_name: "",
    next_of_kin_relationship: "",
    next_of_kin_address: "",
    next_of_kin_tel: "",
});
const submit = () => {
    form.post(route("student.store"), {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <div class="bg-white px-8 py-6">
        <h1 class="font-[semibold] text-sm text-black-200 py-2">
            Personal Information
        </h1>
        <form
            class="flex flex-col gap-3"
            method="post"
            @submit.prevent="submit"
        >
            <div class="grid grid-cols-2 gap-6">
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="admin_no" value="Admin No:" />

                    <TextInput
                        id="admin_no"
                        v-model="form.admin_no"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.admin_no" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3">
                    <InputLabel for="gender" value="Gender:" />

                    <div class="flex flex-row gap-2 items-center">
                        <input
                            id="gender"
                            v-model="form.gender"
                            name="gender"
                            type="radio"
                            value="Female"
                        />

                        Female
                    </div>
                    <div class="flex flex-row gap-2 items-center">
                        <input
                            id="gender"
                            v-model="form.gender"
                            name="gender"
                            type="radio"
                            value="Male"
                        />
                        Male
                    </div>

                    <InputError :message="form.errors.gender" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="id_no" value="ID No:" />
                    <TextInput
                        id="id_no"
                        v-model="form.id_no"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.id_no" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="dob" value="DOB:" />

                    <TextInput
                        id="dob"
                        v-model="form.dob"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.dob" class="mt-2" />
                </div>
            </div>
            <div class="grid lg:grid-cols-3 gap-3">
                <div class="flex flex-row gap-4 w-full">
                    <InputLabel for="course" value="Course:" />

                    <TextInput
                        id="course"
                        v-model="form.course"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.course" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="level" value="Level:" />

                    <TextInput
                        id="level"
                        v-model="form.level"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.level" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="year" value="Year:" />

                    <TextInput
                        id="year"
                        v-model="form.year"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.year" class="mt-2" />
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="home_address" value="Home Address:" />

                    <TextInput
                        id="home_address"
                        v-model="form.home_address"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError
                        :message="form.errors.home_address"
                        class="mt-2"
                    />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="tel_no" value="Tel No:" />

                    <TextInput
                        id="tel_no"
                        v-model="form.tel_no"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.tel_no" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel
                        for="next_of_kin_name"
                        value="Next of Kin(name):"
                    />

                    <TextInput
                        id="next_of_kin_name"
                        v-model="form.next_of_kin_name"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError
                        :message="form.errors.next_of_kin_name"
                        class="mt-2"
                    />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel
                        for="next_of_kin_relationship"
                        value="Relationship:"
                    />

                    <TextInput
                        id="next_of_kin_relationship"
                        v-model="form.next_of_kin_relationship"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError
                        :message="form.errors.next_of_kin_relationship"
                        class="mt-2"
                    />
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel
                        for="next_of_kin_address"
                        value="Postal Address:"
                    />

                    <TextInput
                        id="next_of_kin_address"
                        v-model="form.next_of_kin_address"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError
                        :message="form.errors.next_of_kin_address"
                        class="mt-2"
                    />
                </div>
                <!--                <div class="flex flex-row gap-3 w-full">-->
                <!--                    <InputLabel for="postalCode" value="Postal Code:" />-->

                <!--                    <TextInput-->
                <!--                        id="postalCode"-->
                <!--                        v-model="form.postalCode"-->
                <!--                        autocomplete="lastname"-->
                <!--                        autofocus-->
                <!--                        class="mt-1 block w-full"-->
                <!--                        required-->
                <!--                        type="text"-->
                <!--                    />-->

                <!--                    <InputError-->
                <!--                        :message="form.errors.next_of_kin_address"-->
                <!--                        class="mt-2"-->
                <!--                    />-->
                <!--                </div>-->
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="next_of_kin_tel" value="Tel No:" />

                    <TextInput
                        id="next_of_kin_tel"
                        v-model="form.next_of_kin_tel"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError
                        :message="form.errors.next_of_kin_tel"
                        class="mt-2"
                    />
                </div>
            </div>
            <!--        Div action-->
            <div class="flex flex-row gap-6">
                <PrimaryButton
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    class="ms-4"
                >
                    Save
                </PrimaryButton>
                <button
                    class="text-black-100 px-5 py-2 border border-accent-200"
                >
                    Update Personal Info
                </button>
            </div>
        </form>
    </div>
</template>

<style lang="scss" scoped></style>
