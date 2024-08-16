<script setup></script>

<template>
    <div>
        <div
            v-if="$page.props.flash.success"
            class="alert alert-success flex my-3 px-4 flex-row justify-between items-center py-4 bg-[rgb(172,207,189)]/70"
        >
            {{ $page.props.flash.success }}
        </div>
        <div
            v-if="$page.props.flash.error"
            class="alert alert-danger flex my-3 px-4 flex-row justify-between items-center py-4 bg-red-600/70"
        >
            {{ $page.props.flash.error }}
        </div>
    </div>
</template>
<style lang="scss" scoped></style>
