<script setup>
import MainSearchComponents from './components/MainSearchComponents.vue';
import BackgroundStyleComponent from './components/style/BackgroundStyleComponent.vue';
</script>

<template>
    <BackgroundStyleComponent />
    <div class="w-screen h-screen flex items-center">
        <MainSearchComponents :icon="['fas', 'magnifying-glass']" />
    </div>
</template>
