<template>

    <div class="group flex flex-wrap absolute w-full top-72">
        <div class="flex w-full gap-3.5">
            <font-awesome-icon :icon="['fas', 'magnifying-glass']"
                class="text-5xl text-emerald-600 duration-300 relative m-auto" />
            <input
                class="outline-0 focus:border-b-emerald-300 p-6 w-full text-4xl duration-300 border-b-1 border-b-emerald-600 focus:bg-[#D1E3F0]"
                type="text" v-model="name">
        </div>
        <div class="w-full max-h-[50vh] overflow-auto p-3 mt-3.5">
            <div v-show="data.length > 0" v-for="user in data"
                class="hidden mt-2 bg-[#333333] p-2 items-center gap-4 hover:opacity-75 duration-700 group-focus-within:flex justify-between ">
                <div class="flex gap-x-6">
                    <img src="../assets/unknow.jpg" alt="?" srcset="" class="w-40 h-40 rounded-full">
                    <div class="flex flex-col gap-1.5">
                        <h3 class="text-[24px] text-emerald-500">Name: {{ user.name }}</h3>
                        <h3 class="text-[24px] text-emerald-100"><font-awesome-icon icon="id-badge"
                                class="mr-2 opacity-55" /> {{
                                    user.id }}</h3>
                        <h3 class="text-[20px] text-emerald-100"><font-awesome-icon icon="heart"
                                class="mr-2 opacity-55" />
                            {{ user.age
                            }}</h3>
                        <h3 class="text-[20px] text-emerald-100"><font-awesome-icon :icon="['fas', 'book']"
                                class="mr-2 opacity-55" />{{
                                    user.description }}
                        </h3>
                    </div>
                </div>
                <div class="flex gap-x-3.5">
                    <button class="bg-violet-400 p-2 rounded-[10px] text-white font-medium tracking-wider">Edit</button>
                    <button>Delete</button>
                </div>
            </div>
        </div>
    </div>

</template>

<script setup lang="ts">
import { ref, watch } from 'vue';
import { UserInterface } from '@user/UserInterface';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
const name = ref<String>('')
const data = ref<UserInterface[]>([])
watch(name, () => {
    data.value = api.filter(user => user.name.toLowerCase().includes(String(name.value.toLowerCase())))
    console.log(data)
})
const api: UserInterface[] = ([
    {
        id: 1,
        name: "William da Silva",
        description: "My name is William da Silva",
        age: 20
    }, {
        id: 2,
        name: "Natan Henrique",
        description: "My name is Natan Henrique",
        age: 20
    }, {
        id: 3,
        name: "Augusto Almeida",
        description: "My name is Augusto Almeida",
        age: 20
    }, {
        id: 4,
        name: "Carlos Gomes Da Ponta",
        description: "My name is Carlos Gomes Da Ponta",
        age: 20
    }
])

function changeEnvet(event: Event) {

    // data.value = [data.value[data.value.findIndex(user => user.name.toLowerCase() == (event.target as HTMLInputElement).value.toLowerCase())]]
    // console.log(data.value)
}

</script>