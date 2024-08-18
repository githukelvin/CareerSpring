<script setup>
import { useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = useForm({
    full_name: "",
    registration_number: "",
    school_email: "",
    phone_number: "",
    course: "",
    year_of_study: "",
    company_name: "",
    location: "",
    attachment_position: "",
    start_date: "",
    end_date: "",
});

const submit = () => {
    form.post(route("student.attachment.store"), {
        onFinish: () => form.reset(),
    });
};
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

        <form class="flex flex-col gap-5 py-3" @submit.prevent="submit">
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
                                v-model="form.full_name"
                                autocomplete="fullname"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.full_name"
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
                                v-model="form.registration_number"
                                autocomplete="registration_number"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.registration_number"
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
                                v-model="form.school_email"
                                autocomplete="school_email"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="email"
                            />

                            <InputError
                                :message="form.errors.school_email"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel for="phoneNo" value="Phone Number:" />

                            <TextInput
                                id="phoneNo"
                                v-model="form.phone_number"
                                autocomplete="phone_number"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.phone_number"
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
                                v-model="form.year_of_study"
                                autocomplete="yearOf Study"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.year_of_study"
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
                                v-model="form.company_name"
                                autocomplete="company_name"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.company_name"
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
                                v-model="form.attachment_position"
                                autocomplete="attachment_position"
                                autofocus
                                class="mt-1 block w-full"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.attachment_position"
                                class="mt-2"
                            />
                        </div>
                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel for="startDate" value="Start Date:" />

                            <TextInput
                                id="startDate"
                                v-model="form.start_date"
                                autocomplete="start_date"
                                autofocus
                                class="mt-1 block w-full"
                                placeholder="yyyy-mm-dd"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.start_date"
                                class="mt-2"
                            />
                        </div>

                        <div class="flex flex-row gap-3 w-7/12">
                            <InputLabel for="endDate" value="End Date:" />

                            <TextInput
                                id="endDate"
                                v-model="form.end_date"
                                autocomplete="end_date"
                                autofocus
                                class="mt-1 block w-full"
                                placeholder="yyyy-mm-dd"
                                required
                                type="text"
                            />

                            <InputError
                                :message="form.errors.end_date"
                                class="mt-2"
                            />
                        </div>
                    </div>
                </div>
            </div>

            <PrimaryButton
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
                class="ms-4"
            >
                Submit
            </PrimaryButton>
        </form>
    </div>
</template>

<style lang="scss" scoped></style>
