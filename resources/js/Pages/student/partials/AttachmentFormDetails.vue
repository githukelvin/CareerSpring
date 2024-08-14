<script setup>
import { useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import ButtonSubmit from "@/Components/ButtonSubmit.vue";

const form = useForm({
    fullName: "",
    regNo: "",
    schoolEmail: "",
    phoneNo: "",
    course: "",
    yearOfStudy: "",
    companyName: "",
    location: "",
    attachmentPosition: "",
    startDate: "",
    endDate: "",
});
</script>

<template>
    <div>
        <div class="flex flex-col gap-3">
            <h1 class="font-[semibold] text-base text-black-200 text-sm">
                Attachment Details Form
            </h1>
            <p>
                Please fill in the form below to le us know where you are
                attached
            </p>
        </div>
        <form class="flex flex-col gap-5 py-3" action="" method="post">
            <div class="flex flex-col gap-5">
                <div>
                    <h1 class="font-[semibold] text-sm text-black-200 py-2">
                        Personal Information
                    </h1>
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel for="fullName" value="Full Name:" />

                            <TextInput
                                id="fullName"
                                v-model="form.fullName"
                                autocomplete="fullname"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.fullName"
                                class="mt-2"
                            />
                        </div>

                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel
                                for="regNo"
                                value="Registration Number:"
                            />

                            <TextInput
                                id="regNo"
                                v-model="form.regNo"
                                autocomplete="regNo"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.regNo"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel
                                for="schoolEmail"
                                value="School Email:"
                            />

                            <TextInput
                                id="schoolEmail"
                                v-model="form.schoolEmail"
                                autocomplete="schoolEmail"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="email"
                            />

                            <InputError
                                :message="form.errors.schoolEmail"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel for="phoneNo" value="Phone Number:" />

                            <TextInput
                                id="phoneNo"
                                v-model="form.phoneNo"
                                autocomplete="phoneNo"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.phoneNo"
                                class="mt-2"
                            />
                        </div>
                    </div>
                </div>

                <div>
                    <h1 class="font-[semibold] text-sm text-black-200 py-2">
                        Academic Information
                    </h1>
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel for="course" value="Course:" />

                            <TextInput
                                id="course"
                                v-model="form.course"
                                autocomplete="course"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.course"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel
                                for="yearOfStudy"
                                value="Year of Study:"
                            />

                            <TextInput
                                id="yearOfStudy"
                                v-model="form.yearOfStudy"
                                autocomplete="yearOf Study"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.yearOfStudy"
                                class="mt-2"
                            />
                        </div>
                    </div>
                </div>
                <div>
                    <h1 class="font-[semibold] text-sm text-black-200 py-2">
                        Attachment Details
                    </h1>
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel
                                for="companyName"
                                value="Company Name:"
                            />

                            <TextInput
                                id="companyName"
                                v-model="form.companyName"
                                autocomplete="companyName"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.companyName"
                                class="mt-2"
                            />
                        </div>

                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel for="location" value="Location:" />

                            <TextInput
                                id="location"
                                v-model="form.location"
                                autocomplete="location"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.location"
                                class="mt-2"
                            />
                        </div>

                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel
                                for="attachmentPosition"
                                value="Attachment position:"
                            />

                            <TextInput
                                id="attachmentPosition"
                                v-model="form.attachmentPosition"
                                autocomplete="attachmentPosition"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.attachmentPosition"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel for="startDate" value="Start Date:" />

                            <TextInput
                                id="startDate"
                                v-model="form.startDate"
                                autocomplete="startDate"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.startDate"
                                class="mt-2"
                            />
                        </div>

                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel for="endDate" value="End Date:" />

                            <TextInput
                                id="endDate"
                                v-model="form.endDate"
                                autocomplete="endDate"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.endDate"
                                class="mt-2"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <!--        Action Buttons-->
            <ButtonSubmit> Submit </ButtonSubmit>
        </form>
    </div>
</template>

<style scoped lang="scss"></style>
