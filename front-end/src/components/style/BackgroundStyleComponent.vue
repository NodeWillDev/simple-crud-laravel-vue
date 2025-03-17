<template>
    <div class="grid grid-cols-8 fixed w-screen h-screen">
        <div v-for="line in 48"
            class="relative flex items-center justify-center border before:absolute before:h-[200%] before:w-[40%] before:bg-emerald-500 before:animate-spin after:absolute after:inset-[1px] after:bg-[#222] overflow-hidden"
            :style="{ '--animation-delay': (Math.random() * (2 - 0.01) + 0.01).toFixed(2) + 's' }">
        </div>
    </div>
    <div class="fixed  w-screen h-screen bg-[#6b75770c] backdrop-filter-[blur(16px)]"></div>
</template>