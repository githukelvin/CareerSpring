<script setup>
import { Link } from '@inertiajs/vue3';
import LogoIcon from "@/Components/icons/LogoIcon.vue";
</script>

<template>
   <div>
       <header  class="header" >
           <div class="container py-4 mx-auto flex md:flex-row lg:justify-between items-center">
               <div>
                   <Link
                       href="/"
                   >
                       <LogoIcon/>
                   </Link>
               </div>
               <nav>
                   <ul class="flex md:flex-row gap-7">
                       <li>
                           <Link  href="/">
                               Home
                           </Link>
                       </li>
                       <li>
                           <Link href="/login">
                               For Students
                           </Link>
                       </li>
                       <li>
                           <Link href="/company">
                               For Company
                           </Link>
                       </li>
                       <li>
                           <Link href="/contact">
                               Contact
                           </Link>
                       </li>

                       <li>
                           <Link href="/register">
                               Register
                           </Link>
                       </li>

                   </ul>
               </nav>
               <div>
                   <Link class="bg-accent-100 text-black-100 py-2.5 px-2.5 font-[medium] text-[1.125em]">
                       Find Internship
                   </Link>
               </div>
               <div class="md:hidden">

               </div>
           </div>
           <div class="container mx-auto py-16 grid place-items-center">
               <h1 class="text-white text-[2.7em] font-[bold] text-center leading-">Launch Your Career With <br> Valuable Internships</h1>
               <p class="font-[regular] text-[1.25em] text-center  text-white">Gain real-world experience, network with <br> professionals, and build your resume</p>
               <div class="flex flex-row gap-3 py-7">
                   <button  class="bg-accent-100 text-black-100 py-2.5 px-2.5 font-[medium] text-[1.125em]">Find Internship</button>
                   <button class="bg-transparent  text-white  py-2.5 px-2.5 border border-white font-[medium] text-[1.125em]">Post Internship</button>
               </div>
           </div>
       </header>
       <slot/>
       <footer></footer>
   </div>
</template>
