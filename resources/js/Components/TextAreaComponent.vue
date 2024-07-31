<script setup>
const model = defineModel({
    type: String,
    required: true,
});

const  prop = defineProps({
    placeholder:{
        type: String,
        required: true,
    }
})
</script>

<template>
    <textarea name="" v-model="model"
              ref="textarea" id="" cols="30" rows="5" :placeholder="placeholder"></textarea>
</template>

<style scoped lang="scss">

</style>
