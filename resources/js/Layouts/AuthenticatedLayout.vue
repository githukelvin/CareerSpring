<script setup>

import { Link } from '@inertiajs/vue3';
import LogoIcon from "@/Components/icons/LogoIcon.vue";
const props = defineProps({
    navLinks: {
        type: [Array, String],
        required: true,
    }
});
</script>

<template>
    <div>
        <div class="bg-white w-vw">
            <header class="flex flex-row justify-between items-center  py-4 px-3">
                <div>
                    <Link href="/"><LogoIcon/></Link>
                </div>
                <div class="flex flex-row items-center gap-6">
                    <div>
                        bell
                    </div>
                    <div class="flex items-center flex-row gap-4">
                        <img class="w-[50px] h-[50px] rounded-full" src="https://randomuser.me/api/portraits/men/80.jpg" alt="">
                        <p>Kelvin Githu</p>
                        <div>arrow down</div>
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
                            <Link class="text-base " :href="route.routeName">  {{route.Name}} </Link>
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
