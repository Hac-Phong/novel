<template>
    <el-card style="width: 280px; height: 460px">
        <div class="grid grid-cols-2 grid-rows-4 h-[400px]">
            <div
                class="flex justify-center items-center flex-col"
                v-for="item in sidebar"
                :key="item.title"
            >
                <img :src="item.icon" alt="" />
                <span class="text-nowrap hover:text-blue-novel font-medium">{{
                    item.name
                }}</span>
            </div>
        </div>
    </el-card>
</template>
<script setup>
import { ref } from "vue";
const sidebar = ref([
    {
        name: "Ngôn Tình",
        icon: "/icon/img_1.png",
    },
    {
        name: "Hiện Đại",
        icon: "/icon/img_2.png",
    },
    {
        name: "Cổ Đại",
        icon: "/icon/img_3.png",
    },
    {
        name: "Tiên Hiệp",
        icon: "/icon/img_4.png",
    },
    {
        name: "Kiếm Hiệp",
        icon: "/icon/img_5.png",
    },
    {
        name: "Trọng Sinh",
        icon: "/icon/img_6.png",
    },
    {
        name: "Cung Đấu",
        icon: "/icon/img_7.png",
    },
    {
        name: "Đam Mỹ",
        icon: "/icon/img_8.png",
    },
]);
</script>
