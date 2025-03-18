<script setup>
import MainSearchComponents from './components/MainSearchComponents.vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
</script>

<template>
    <div class="w-screen h-screen flex items-center">
        <MainSearchComponents :icon="['fas', 'magnifying-glass']" />
    </div>
</template>
