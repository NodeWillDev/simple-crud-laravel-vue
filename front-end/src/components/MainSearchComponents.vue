<template>

    <div class="group flex flex-wrap absolute w-full top-72">
        <div class="flex w-full gap-3.5">
            <font-awesome-icon :icon="['fas', 'magnifying-glass']"
                class="text-5xl text-emerald-600 duration-300 relative m-auto" />
            <input
                class="outline-0 text-white focus:border-b-emerald-300 p-6 w-full text-4xl duration-300 border-b-1 border-b-emerald-600 focus:bg-[#222]"
                type="text" v-model="search">
        </div>
        <div class="w-full max-h-[50vh] overflow-auto p-3 mt-3.5">
            <div v-show="data.length > 0" v-for="user in data"
                class="hidden mt-2 bg-[#30303042] p-2 items-center gap-4 hover:bg-[#4e4e4e] duration-700 group-focus-within:flex justify-between ">
                <div class="flex gap-x-6 items-center">
                    <img src="../assets/unknow.jpg" alt="?" srcset="" class="w-40 h-40 rounded-full">
                    <div class="flex flex-col gap-1.5">
                        <h3 class="text-[24px] text-white tracking-[4px] underline font-medium mb-3"> {{
                            user.name }}</h3>
                        <h3 class="text-[24px] text-emerald-100"><font-awesome-icon icon="id-badge"
                                class="mr-2 opacity-55" /> Identifier: {{
                                    user.id }}</h3>
                        <h3 class="text-[20px] text-emerald-100"><font-awesome-icon icon="heart"
                                class="mr-2 opacity-55" /> Age
                            {{ user.age
                            }}</h3>
                        <h3 class="text-[15px] text-emerald-100 w-2xl"><font-awesome-icon :icon="['fas', 'book']"
                                class="mr-2 opacity-55" />{{
                                    user.description }}
                        </h3>
                    </div>
                </div>
                <div class="flex gap-x-3.5">
                    <button
                        class="bg-violet-400 p-2 rounded-[10px] text-white font-medium tracking-[2px] cursor-pointer hover:text-violet-400 hover:bg-white hover:tracking-[4px] duration-300">Edit</button>
                    <button
                        class="bg-red-500 p-2 rounded-[10px] text-white font-medium tracking-[2px] cursor-pointer hover:text-red-500 hover:bg-white hover:tracking-[4px] duration-300">Delete</button>
                </div>
            </div>
        </div>
    </div>

</template>

<script setup lang="ts">
import { ref, watch } from 'vue';
import { UserInterface } from '@user/UserInterface';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
const api: UserInterface[] = ([
    {
        id: 1,
        name: "William da Silva",
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        age: 20
    }, {
        id: 2,
        name: "Natan Henrique",
        description: "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?",
        age: 42
    }, {
        id: 3,
        name: "Augusto Almeida",
        description: "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?",
        age: 39
    }, {
        id: 4,
        name: "Carlos Gomes Da Ponta",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        age: 67
    },
    {
        id: 5,
        name: "Alexandre Henrique",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        age: 67
    },
    {
        id: 6,
        name: "Marcos Almeida Silva",
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        age: 67
    },
])
const search = ref<String>('')
const data = ref<UserInterface[]>(api)
watch(search, () => {
    data.value = api.filter(({ name, id, age, description }) =>
        [name, id, age, description].some(field =>
            String(field).toLowerCase().includes(search.value.trim().toLowerCase())
        )
    );
});

</script>