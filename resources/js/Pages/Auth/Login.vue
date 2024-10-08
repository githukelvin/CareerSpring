<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import AuthLayout from "@/Layouts/AuthLayout.vue";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Log in" />

    <AuthLayout>
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <div class="flex flex-col">
            <div class="bg-neutral-500 mb-6">
                <h1 class="text-xl font-[semibold]">
                    Use This credentials to Login as per user
                </h1>
                <div class="border border-accent-100 my-2">
                    <h1 class="text-base font-[medium]">As a Coordinator</h1>
                    <p class="text-sm font-[regular] py-1">
                        Email: coordinator@example.com
                    </p>
                    <p class="text-sm font-[regular] py-1">
                        Password: coordinator@example.com
                    </p>
                </div>
                <div class="border border-accent-100 my-2">
                    <h1 class="text-base font-[medium]">As a Lecturer</h1>
                    <p class="text-sm font-[regular] py-1">
                        Email: lecturer@example.com
                    </p>
                    <p class="text-sm font-[regular] py-1">
                        Password: lecturer@example.com
                    </p>
                </div>
                <div class="border border-accent-100 my-2">
                    <h1 class="text-base font-[medium]">As a Director</h1>
                    <p class="text-sm font-[regular] py-1">
                        Email: director@example.com
                    </p>
                    <p class="text-sm font-[regular] py-1">
                        Password: director@example.com
                    </p>
                </div>
            </div>

            <form @submit.prevent="submit">
                <input :value="csrf_token" name="_token" type="hidden" />
                <div>
                    <InputLabel for="email" value="Email" />

                    <TextInput
                        id="email"
                        v-model="form.email"
                        autocomplete="username"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="email"
                    />

                    <InputError :message="form.errors.email" class="mt-2" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password" value="Password" />

                    <TextInput
                        id="password"
                        v-model="form.password"
                        autocomplete="current-password"
                        class="mt-1 block w-full"
                        required
                        type="password"
                    />

                    <InputError :message="form.errors.password" class="mt-2" />
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <Checkbox
                            v-model:checked="form.remember"
                            name="remember"
                        />
                        <span class="ms-2 text-sm text-gray-600"
                            >Remember me</span
                        >
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Forgot your password?
                    </Link>

                    <PrimaryButton
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        class="ms-4"
                    >
                        Log in
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </AuthLayout>
</template>
