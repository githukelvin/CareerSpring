<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import { useForm } from "@inertiajs/vue3";
import ButtonSubmit from "@/Components/ButtonSubmit.vue";

const form = useForm({
    lastName: "",
    otherNames: "",
    adminNo: "",
    gender: "",
    idNo: "",
    DOB: "",
    course: "",
    level: "",
    year: "",
    homeAddress: "",
    telNo: "",
    nextOfKin: "",
    relationship: "",
    postalAddress: "",
    postalCode: "",
    telNoKin: "",
});
</script>

<template>
    <div class="bg-white px-8 py-6">
        <h1 class="font-[semibold] text-sm text-black-200 py-2">
            Personal Information
        </h1>
        <form class="flex flex-col gap-3" action="" method="post">
            <div class="grid grid-cols-2 gap-6">
                <div class="flex flex-row w-full">
                    <InputLabel for="lastName" value="Last Name:" />

                    <TextInput
                        id="lastName"
                        v-model="form.lastName"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.lastName" class="mt-2" />
                </div>
                <div class="flex flex-row w-full">
                    <InputLabel for="otherNames" value="Other names:" />

                    <TextInput
                        id="otherNames"
                        v-model="form.otherNames"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError
                        :message="form.errors.otherNames"
                        class="mt-2"
                    />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="adminNo" value="Admin No:" />

                    <TextInput
                        id="adminNo"
                        v-model="form.adminNo"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.adminNo" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3">
                    <InputLabel for="gender" value="Gender:" />

                    <div class="flex flex-row gap-2 items-center">
                        <input
                            type="radio"
                            name="gender"
                            v-model="form.gender"
                            id="gender"
                        />

                        Female
                    </div>
                    <div class="flex flex-row gap-2 items-center">
                        <input
                            type="radio"
                            name="gender"
                            v-model="form.gender"
                            id="gender"
                        />
                        Male
                    </div>

                    <InputError :message="form.errors.gender" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="idNo" value="ID No:" />
                    <TextInput
                        id="idNo"
                        v-model="form.idNo"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.idNo" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="DOB" value="DOB:" />

                    <TextInput
                        id="DOB"
                        v-model="form.DOB"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.DOB" class="mt-2" />
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
                    <InputLabel for="homeAddress" value="Home Address:" />

                    <TextInput
                        id="homeAddress"
                        v-model="form.homeAddress"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError
                        :message="form.errors.homeAddress"
                        class="mt-2"
                    />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="telNo" value="Tel No:" />

                    <TextInput
                        id="telNo"
                        v-model="form.telNo"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.telNo" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="nextOfKin" value="Next of Kin(name):" />

                    <TextInput
                        id="nextOfKin"
                        v-model="form.nextOfKin"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.nextOfKin" class="mt-2" />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="relationship" value="Relationship:" />

                    <TextInput
                        id="relationship"
                        v-model="form.relationship"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError
                        :message="form.errors.relationship"
                        class="mt-2"
                    />
                </div>
            </div>
            <div class="grid grid-cols-3 gap-3">
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="postalAddress" value="Postal Address:" />

                    <TextInput
                        id="postalAddress"
                        v-model="form.postalAddress"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError
                        :message="form.errors.postalAddress"
                        class="mt-2"
                    />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="postalCode" value="Postal Code:" />

                    <TextInput
                        id="postalCode"
                        v-model="form.postalCode"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError
                        :message="form.errors.postalCode"
                        class="mt-2"
                    />
                </div>
                <div class="flex flex-row gap-3 w-full">
                    <InputLabel for="telNoKin" value="Tel No:" />

                    <TextInput
                        id="telNoKin"
                        v-model="form.telNoKin"
                        autocomplete="lastname"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="text"
                    />

                    <InputError :message="form.errors.telNoKin" class="mt-2" />
                </div>
            </div>
            <!--        Div action-->
            <div class="flex flex-row gap-6">
                <button-submit> Save </button-submit>
                <button
                    class="text-black-100 px-5 py-2 border border-accent-200"
                >
                    Update Personal Info
                </button>
            </div>
        </form>
    </div>
</template>

<style scoped lang="scss"></style>
