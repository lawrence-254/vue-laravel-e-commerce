<script setup>
import NavBar from '../components/NavBar.vue'
import { useStore } from '@pinia/vue';

const store = useStore();
const token = store.getTestToken()
</script>
<template>
    <h1>Dashboard</h1>
    <NavBar/>
    <p>Token: {{ token }}</p>
</template>


<style scoped>
/* Your scoped styles here */
</style>
