<script setup>
import { useForm } from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const form = useForm({
    organization_name: "",
    physical_address: "",
    postal_address: "",
    tel_no: "",
    organization_email: "",
    department_name: "",
    head_name: "",
    head_tel: "",
    supervisor_name: "",
    supervisor_tel: "",
    designation: "",
    signature: "",
});
const submit = () => {
    form.post(route("student.attachment_place"), {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <div class="bg-white px-8 py-6">
        <h1 class="font-[semibold] text-sm text-black-200 py-2">
            Details of Attachment place
        </h1>
        <form class="flex flex-col gap-5" @submit.prevent="submit">
            <div class="flex flex-row gap-3 w-full">
                <InputLabel
                    for="nameOrganization"
                    value="Name of Organization:"
                />

                <TextInput
                    id="nameOrganization"
                    v-model="form.organization_name"
                    autocomplete="organization"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.organization_name"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="physicalAddress" value="Physical Address:" />

                <TextInput
                    id="physicalAddress"
                    v-model="form.physical_address"
                    autocomplete="Physical Address"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.physical_address"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="postalAddress" value="Postal Address:" />

                <TextInput
                    id="postalAddress"
                    v-model="form.postal_address"
                    autocomplete="Postal Address"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.postal_address"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNo" value="Tel No:" />

                <TextInput
                    id="telNo"
                    v-model="form.tel_no"
                    autocomplete="Tel no"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.tel_no" class="mt-2" />
            </div>

            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="email" value="Organization Email:" />

                <TextInput
                    id="email"
                    v-model="form.organization_email"
                    autocomplete="Faculty dean"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="email"
                />

                <InputError
                    :message="form.errors.organization_email"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="department" value="Department Attached:" />

                <TextInput
                    id="department"
                    v-model="form.department_name"
                    autocomplete="department"
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
                <InputLabel for="nameOfHead" value="Name of Head:" />

                <TextInput
                    id="nameOfHead"
                    v-model="form.head_name"
                    autocomplete="Faculty dean"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.head_name" class="mt-2" />
            </div>

            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNoHead" value="Head Tel No:" />

                <TextInput
                    id="telNoHead"
                    v-model="form.head_tel"
                    autocomplete="tel No"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.head_tel" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="supervisorName" value="Supervisor`s Name:" />

                <TextInput
                    id="supervisorName"
                    v-model="form.supervisor_name"
                    autocomplete="name"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.supervisor_name"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNoSupervisor" value="Supervisor Tel No:" />

                <TextInput
                    id="telNoSupervisor"
                    v-model="form.supervisor_tel"
                    autocomplete="tel"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.supervisor_tel"
                    class="mt-2"
                />
            </div>

            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="designation" value="Designation:" />

                <TextInput
                    id="designation"
                    v-model="form.designation"
                    autocomplete="Designation"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.designation" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="signature" value="Signature:" />

                <TextInput
                    id="signature"
                    v-model="form.signature"
                    autocomplete="Faculty dean"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.signature" class="mt-2" />
            </div>
            <!--            div actions-->
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
