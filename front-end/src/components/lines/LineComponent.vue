<template>
    <div class="w-screen h-screen absolute -z-50 grid grid-cols-8">
        <div v-for="data in lines" :key="data" class="border"></div>
    </div>

</template>

<script setup lang="ts">
import { ref } from "vue"
const lines = 56
</script>