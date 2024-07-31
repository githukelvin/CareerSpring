<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    avatar: null,
})

// function submit() {
//     form.post('/users')
// }
</script>

<template>
    <div class="bg-white px-6 ">
        <h1 class="font-[semibold] text-sm text-black-200 py-2">User Profile</h1>
        <form class="grid place-items-center" >
            <img class="rounded-full mt-8 w-[200px]" src="https://randomuser.me/api/portraits/men/5.jpg" alt="avatar">
            <div class="relative w-fit  py-16">
                <input class="absolute opacity-0  px-5 py-2" type="file" @input="form.avatar = $event.target.files[0]" />
                <button  class="bg-accent-100 text-black-200 text-xl px-5 py-2">Change Photo</button>
            </div>
            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                {{ form.progress.percentage }}%
            </progress>

        </form>
    </div>
</template>
