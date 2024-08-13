<script setup>
import axios from 'axios';
import { route } from '../../../vendor/tightenco/ziggy/src/js';
import { Head } from '@inertiajs/vue3';

axios.post("/logout").then(()=>{
    route("/")
}).catch((e)=>{
    console.error(e)
})

</script>

<style lang="scss" scoped>

</style>
