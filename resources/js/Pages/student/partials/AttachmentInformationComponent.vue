<script setup>
import ButtonSubmit from "@/Components/ButtonSubmit.vue";
import { useForm } from "@inertiajs/vue3";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";

const form = useForm({
    nameOrganization: "",
    physicalAddress: "",
    postalAddress: "",
    telNo: "",
    email: "",
    department: "",
    nameOfHead: "",
    telNoHead: "",
    supervisorName: "",
    telNoSupervisor: "",
    designation: "",
    signature: "",
});
</script>

<template>
    <div class="bg-white px-8 py-6">
        <h1 class="font-[semibold] text-sm text-black-200 py-2">
            Details of Attachment place
        </h1>
        <form class="flex flex-col gap-5" action="" method="post">
            <div class="flex flex-row gap-3 w-full">
                <InputLabel
                    for="nameOrganization"
                    value="Name of Organization:"
                />

                <TextInput
                    id="nameOrganization"
                    v-model="form.nameOrganization"
                    autocomplete="organization"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.nameOrganization"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="physicalAddress" value="Physical Address:" />

                <TextInput
                    id="physicalAddress"
                    v-model="form.physicalAddress"
                    autocomplete="Physical Address"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.physicalAddress"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="postalAddress" value="Postal Address:" />

                <TextInput
                    id="postalAddress"
                    v-model="form.postalAddress"
                    autocomplete="Postal Address"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.postalAddress" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNo" value="Tel No:" />

                <TextInput
                    id="telNo"
                    v-model="form.telNo"
                    autocomplete="Tel no"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.telNo" class="mt-2" />
            </div>

            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="email" value="Organization Email:" />

                <TextInput
                    id="email"
                    v-model="form.email"
                    autocomplete="Faculty dean"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="email"
                />

                <InputError :message="form.errors.email" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="department" value="Department Attached:" />

                <TextInput
                    id="department"
                    v-model="form.department"
                    autocomplete="department"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.department" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="nameOfHead" value="Name of Head:" />

                <TextInput
                    id="nameOfHead"
                    v-model="form.nameOfHead"
                    autocomplete="Faculty dean"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.nameOfHead" class="mt-2" />
            </div>

            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNoHead" value="Head Tel No:" />

                <TextInput
                    id="telNoHead"
                    v-model="form.telNoHead"
                    autocomplete="tel No"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError :message="form.errors.telNoHead" class="mt-2" />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="supervisorName" value="Supervisor`s Name:" />

                <TextInput
                    id="supervisorName"
                    v-model="form.supervisorName"
                    autocomplete="name"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.supervisorName"
                    class="mt-2"
                />
            </div>
            <div class="flex flex-row gap-3 w-full">
                <InputLabel for="telNoSupervisor" value="Supervisor Tel No:" />

                <TextInput
                    id="telNoSupervisor"
                    v-model="form.telNoSupervisor"
                    autocomplete="tel"
                    autofocus
                    class="mt-1 block w-full"
                    required
                    type="text"
                />

                <InputError
                    :message="form.errors.telNoSupervisor"
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
                <button-submit> save </button-submit>
            </div>
        </form>
    </div>
</template>

<style scoped lang="scss"></style>
