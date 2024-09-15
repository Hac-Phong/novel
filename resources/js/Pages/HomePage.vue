<template>
    <NavBarNovel />
    <div class="flex justify-center mx-auto w-[1180px] space-x-5 mb-5">
        <SideBar />
        <CarouselNovel />
        <NotificationBar />
    </div>
    <div class="flex justify-center mx-auto w-[1180px] space-x-5">
        <FeaturedNovel />
        <RankBarNovel />
    </div>
    <div class="flex justify-between mx-auto w-[1180px] space-x-5 mt-5">
        <el-card style="width: 880px">
            <div
                class="grid grid-cols-8 content-center border-b border-b-[#eaeaea] pb-2"
            >
                <p>Thể Loại</p>
                <p class="col-span-2">Tiểu Thuyết</p>
                <p class="col-span-2">Chương</p>
                <p class="col-span-2">Tác Giả</p>
                <p class="">Ngày Đăng</p>
            </div>
            <div class="grid grid-cols-8 content-center border-b py-2">
                <p>[Ngôn Tình]</p>
                <p class="col-span-2 truncate w-5/6">Hoa Mùa Hạ Hoa Muf ddd</p>
                <p class="col-span-2 truncate w-5/6">
                    Chương 5: Ngày đẹp trời Chương 5: Ngày đẹp trời
                </p>
                <p class="col-span-2">Chương Nhược Nam</p>
                <p class="">14-04-2002</p>
            </div>
        </el-card>
        <el-card style="width: 280px">
            <div class="mb-3 flex items-center">
                <notebook-pen size="32" color="#7e7cfb" />
                <span class="text-xl ml-2 font-bold">Đề Xuất</span>
            </div>
            <div class="flex items-center">
                <div class="border border-[#ccc] shadow-img w-[78px] h-[106px]">
                    <img
                        src="https://d1.kuangxiangit.com/uploads/allimg/c240717/17-07-24163047-20964.jpg"
                        alt=""
                        class="w-full h-[106px]"
                    />
                </div>
                <div class="h-[108px] flex flex-col ml-3">
                    <span class="text-base">Hoa Mua ha</span>
                    <span class="text-sm text-[#3797cc]">Chuong nhuoc nam</span>
                </div>
            </div>
            <el-divider />
            <div class="flex items-center">
                <div class="border border-[#ccc] shadow-img w-[78px] h-[106px]">
                    <img
                        src="https://d1.kuangxiangit.com/uploads/allimg/c240717/17-07-24163047-20964.jpg"
                        alt=""
                        class="w-full h-[106px]"
                    />
                </div>
                <div class="h-[108px] flex flex-col ml-3">
                    <span class="text-base">Hoa Mua ha</span>
                    <span class="text-sm text-[#3797cc]">Chuong nhuoc nam</span>
                </div>
            </div>
            <el-divider />
            <div class="flex items-center">
                <div class="border border-[#ccc] shadow-img w-[78px] h-[106px]">
                    <img
                        src="https://d1.kuangxiangit.com/uploads/allimg/c240717/17-07-24163047-20964.jpg"
                        alt=""
                        class="w-full h-[106px]"
                    />
                </div>
                <div class="h-[108px] flex flex-col ml-3">
                    <span class="text-base">Hoa Mua ha</span>
                    <span class="text-sm text-[#3797cc]">Chuong nhuoc nam</span>
                </div>
            </div>
            <el-divider />
            <div class="flex items-center">
                <div class="border border-[#ccc] shadow-img w-[78px] h-[106px]">
                    <img
                        src="https://d1.kuangxiangit.com/uploads/allimg/c240717/17-07-24163047-20964.jpg"
                        alt=""
                        class="w-full h-[106px]"
                    />
                </div>
                <div class="h-[108px] flex flex-col ml-3">
                    <span class="text-base">Hoa Mua ha</span>
                    <span class="text-sm text-[#3797cc]">Chuong nhuoc nam</span>
                </div>
            </div>
        </el-card>
    </div>
</template>
<script setup>
import SideBar from "@/Components/SideBar.vue";
import CarouselNovel from "@/Components/CarouselNovel.vue";
import NotificationBar from "@/Components/NotificationBar.vue";
import FeaturedNovel from "@/Components/FeaturedNovel.vue";
import NavBarNovel from "@/Components/NavBarNovel.vue";
import RankBarNovel from "@/Components/RankBarNovel.vue";
import { NotebookPen } from "lucide-vue-next";
</script>
