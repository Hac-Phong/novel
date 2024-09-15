<template>
    <el-card style="width: 880px">
        <div class="flex justify-between flex-col h-[450px]">
            <div style="width: 465px">
                <div class="mb-3 flex items-center">
                    <notebook-pen size="32" color="#7e7cfb" />
                    <span class="text-xl ml-2 font-bold">Đề Xuất</span>
                </div>
                <el-carousel
                    :interval="4000"
                    type="card"
                    height="240px"
                    arrow="never"
                    trigger="click"
                    indicator-position="outside"
                >
                    <el-carousel-item v-for="item in 9" :key="item">
                        <h3 text="2xl" justify="center">{{ item }}</h3>
                    </el-carousel-item>
                </el-carousel>
            </div>
            <el-space wrap fill :fill-ratio="30">
                <div class="h-[120px] flex">
                    <div
                        class="border border-[#ccc] shadow-img w-[88px] h-[118px]"
                    >
                        <img
                            src="https://d1.kuangxiangit.com/uploads/allimg/c240717/17-07-24163047-20964.jpg"
                            alt=""
                        />
                    </div>
                    <div class="w-[143px] ml-4 flex flex-col">
                        <span class="text-lg truncate">Hoa Hai Duong</span>
                        <span class="text-base truncate text-[#3797cc]"
                            >Chuong Nhuoc Nam</span
                        >
                        <p class="text-[#999] line-clamp-3 text-sm">
                            Use truncate to prevent text from wrapping and
                            truncate overflowing text with an ellipsis (…) if
                            needed.
                        </p>
                    </div>
                </div>
                <div class="h-[120px] flex">
                    <div
                        class="border border-[#ccc] shadow-img w-[88px] h-[118px]"
                    >
                        <img
                            src="https://d1.kuangxiangit.com/uploads/allimg/c240717/17-07-24163047-20964.jpg"
                            alt=""
                        />
                    </div>
                    <div class="w-[143px] ml-4 flex flex-col">
                        <span class="text-lg truncate">Hoa Hai Duong</span>
                        <span class="text-base truncate text-[#3797cc]"
                            >Chuong Nhuoc Nam</span
                        >
                        <p class="text-[#999] line-clamp-3 text-sm">
                            Use truncate to prevent text from wrapping and
                            truncate overflowing text with an ellipsis (…) if
                            needed.
                        </p>
                    </div>
                </div>
                <div class="h-[120px] flex">
                    <div
                        class="border border-[#ccc] shadow-img w-[88px] h-[118px]"
                    >
                        <img
                            src="https://d1.kuangxiangit.com/uploads/allimg/c240717/17-07-24163047-20964.jpg"
                            alt=""
                        />
                    </div>
                    <div class="w-[143px] ml-4 flex flex-col">
                        <span class="text-lg truncate">Hoa Hai Duong</span>
                        <span class="text-base truncate text-[#3797cc]"
                            >Chuong Nhuoc Nam</span
                        >
                        <p class="text-[#999] line-clamp-3 text-sm">
                            Use truncate to prevent text from wrapping and
                            truncate overflowing text with an ellipsis (…) if
                            needed.
                        </p>
                    </div>
                </div>
            </el-space>
        </div>
    </el-card>
</template>
<script setup>
import { NotebookPen } from "lucide-vue-next";
</script>

<style scoped>
.el-carousel__item h3 {
    color: #475669;
    opacity: 0.75;
    line-height: 200px;
    margin: 0;
    text-align: center;
}

.el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
}

.el-carousel__item:nth-child(2n + 1) {
    background-color: #d3dce6;
}
</style>
