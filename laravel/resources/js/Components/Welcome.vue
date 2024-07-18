<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
</script>

<template>
    <div>
        <button v-if="$page.props.user.permissions.includes('create-role')">Manage Roles</button>
        <button v-if="$page.props.user.permissions.includes('create-lesson')">Manage Lessons</button>
    </div>
</template>
<style>
    button{
        margin: 10px;
        background: #b44646;
        padding: 2em;
        color: #eee;
    }
</style>
