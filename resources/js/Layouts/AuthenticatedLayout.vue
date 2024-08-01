<script setup>

import {Head, Link, usePage} from '@inertiajs/vue3';
import LogoIcon from "@/Components/icons/LogoIcon.vue";
import {computed} from "vue";
import ArrowIcon from "@/Components/icons/ArrowIcon.vue";
import BellIcon from "@/Components/icons/BellIcon.vue";
const props = defineProps({
    navLinks: {
        type: [Array, String],
        required: true,
    }
});

const currentUrl = computed(() => usePage().url)
const  user = usePage().props.auth.user;
const isActive = (url) => {
    return url === currentUrl.value
}
</script>

<template>
    <Head>
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    </Head>
    <div class="relative">
        <div class="bg-white w-vw">
            <header class="flex flex-row justify-between items-center  py-4 px-3">
                <div>
                    <Link href="/"><LogoIcon/></Link>
                </div>
                <div class="flex flex-row items-center gap-6">
                    <div>
                        <BellIcon/>
                    </div>
                    <div class="flex items-center flex-row gap-4">
                        <img class="w-[50px] h-[50px] rounded-full" src="https://randomuser.me/api/portraits/men/80.jpg" alt="">
                        <p>{{user.name}}</p>
                        <div><ArrowIcon/></div>
                    </div>
                </div>
            </header>
        </div>
        <div class="grid grid-cols-[15em_auto]">
            <div class="nav__side__bar bg-primary-500 min-h-screen p-4">
                <p class="text-white uppercase">Navigation</p>
                <nav>
                    <ul >
                        <li v-for="route of navLinks" :key="route.Name" >
<!--                            <{{route.icon}}/>-->
                            <Link class="text-base "  :href="route.routeName"  :class="{ 'active': isActive(route.routeName) }">   {{route.Name}} </Link>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="bg-gray">
                <slot/>
            </div>
        </div>
    </div>
</template>


<style>
.active{
    @apply text-accent-200 font-[semibold] text-[1.25em];
}
</style>
