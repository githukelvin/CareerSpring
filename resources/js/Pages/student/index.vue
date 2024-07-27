
<script setup>
import {Head} from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import UploadImage from "@/Pages/student/partials/UploadImage.vue";
import PersonalInformationComponent from "@/Pages/student/partials/PersonalInformationComponent.vue";
import TrainingInstituionComponent from "@/Pages/student/partials/TrainingInstituionComponent.vue";
import AttachmentInformationComponent from "@/Pages/student/partials/AttachmentInformationComponent.vue";

const routeobject =[
    {
        'Name':'Dashboard',
        'routeName':'student/dashboard',
        'icon':'LogoIcon',
    },
    {
        'Name':'Attachment Details',
        'routeName':'student/attachment',
        'icon':'LogoIcon',
    },
    {
        'Name':'Logging',
        'routeName':'student/logging',
        'icon':'LogoIcon',
    },
    {
        'Name':'Assessments',
        'routeName':'student/assess',
        'icon':'LogoIcon',
    }
    ,
    {
        'Name':'Documents',
        'routeName':'student/documents',
        'icon':'LogoIcon',
    }
    ,
    {
        'Name':'Settings',
        'routeName':'student/settings',
        'icon':'LogoIcon',
    }
]

</script>


<template>
    <Head title="Student Dashboard"/>
   <AuthenticatedLayout :nav-links="routeobject">
       <div class="px-8 pt-4 ">
           <h1 class="font-[semibold] text-xl ">Dashboard</h1>
           <div class="flex flex-col gap-10">
               <div class="grid lg:grid-cols-3 gap-6">
                   <div>
                       completed
                   </div>
                   <div>
                       70% completed
                   </div>
                   <div>
                       week 8
                       <Link>Add new Entry</Link>
                   </div>
               </div>
               <div>
                   <div class="grid grid-cols-[20em_auto] mb-12 gap-10">
                       <div>
                           <UploadImage/>
                       </div>
                       <div>
                           <PersonalInformationComponent/>
                       </div>

                   </div>
                   <div class="grid  grid-cols-2 gap-4">
                       <div>
                           <TrainingInstituionComponent/>
                       </div>
                       <div>
                           <AttachmentInformationComponent/>
                       </div>

                   </div>
               </div>
           </div>

       </div>
   </AuthenticatedLayout>
</template>


<style lang="scss" scoped>

</style>
