<script setup>
import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ConfirmComponent from "@/Components/ConfirmComponent.vue";
import ErrorComponent from "@/Components/ErrorComponent.vue";
import {ref} from "vue";
const routeobject =[
    {
        'Name':'Dashboard',
        'routeName':'/student',
        'icon':'LogoIcon',
    },
    {
        'Name':'Attachment Details',
        'routeName':'attachment',
        'icon':'LogoIcon',
    },
    {
        'Name':'Logging',
        'routeName':'logging',
        'icon':'LogoIcon',
    },
    {
        'Name':'Assessments',
        'routeName':'assess',
        'icon':'LogoIcon',
    }
    ,
    {
        'Name':'Documents',
        'routeName':'documents',
        'icon':'LogoIcon',
    }
    ,
    {
        'Name':'Settings',
        'routeName':'settings',
        'icon':'LogoIcon',
    }
]

const confirm = ref(false)
</script>

<template>
    <Head title="Assessment"/>
   <div class="relative">
       <AuthenticatedLayout :nav-links="routeobject">
           <div class="px-8 py-4 ">
               <h1 class="font-[semibold] text-black-200 text-[1.25em] pb-4">Assessment</h1>
               <div class="flex flex-col gap-6">
                   <div v-if="true" class="bg-white p-6">
                       <h1 class="font-[semibold] text-base text-black-200 py-4">Assessment status</h1>

                       <p class="text-accent-200 text-2xl font-[medium]">Pending</p>

                       <button class="bg-accent-200 px-4 py-3 mt-4" @click="confirm =!confirm">Mark Assessment Readiness</button>
                   </div>
                   <div v-else class=" flex flex-col gap-6">
                       <div class="bg-white p-6">
                           <h1 class="font-[semibold] text-base text-black-200 py-4">Allocated Supervisor </h1>

                           <p class="text-black-200 py-2.5 text-sm font-[medium]"><span class="font-[semibold]">Name:</span>Kelvin Githu</p>
                           <p class="text-black-200 py-2.5 text-sm font-[medium]"><span class="font-[semibold]">Email:</span>johndoe@gmail.com</p>
                           <p class="text-black-200 py-2.5 text-sm font-[medium]"><span class="font-[semibold]">Phone:</span>07123456789</p>


                       </div>


                       <div class="bg-white p-6">
                           <h1 class="font-[semibold] text-base text-black-200 py-4">Assessment Schedule</h1>

                           <p class="text-black-200 text-sm font-[medium]">20th June 2024 10:00am</p>

                       </div>
                   </div>


               </div>


           </div>
           <div class="" v-show="confirm">
               <ConfirmComponent @cancel-click="confirm =!confirm"/>

           </div>
           <div v-show="false">
               <ErrorComponent/>
           </div>
       </AuthenticatedLayout>

   </div>
</template>

<style scoped lang="scss">

</style>
