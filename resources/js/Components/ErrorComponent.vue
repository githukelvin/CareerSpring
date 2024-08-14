<script setup>
import CautionIcon from "@/Components/icons/CautionIcon.vue";
</script>

<template>
    <div class="absolute top-50 left-[50%]">
        <div class="bg-white p-10 w-fit">
            <h1
                class="font-[medium] flex flex-row gap-2 text-center text-base py-2"
            >
                <CautionIcon /> Incomplete Internship Period
            </h1>
            <p class="text-center font-[medium] text-sm">
                You have not completed the required <br />
                10 weeks of internship. Please <br />
                complete the remaining weeks before <br />
                marking readiness.
            </p>
            <!--    Div:actions-->
            <div class="grid place-items-center mt-4">
                <button class="text-black-200 bg-accent-200 py-3 px-7">
                    OK
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss"></style>
