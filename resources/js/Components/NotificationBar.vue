<template>
    <div class="space-y-3">
        <el-card style="width: 280px; height: 269px">
            <p v-for="o in 4" :key="o" class="text item">
                {{ "List item " + o }}
            </p>
        </el-card>
        <div class="w-[280px] h-auto">
            <img
                src="https://www.hanwujinian.com/public/static/home/pc1/img/index/title/block_2.png"
                alt=""
                class="w-full h-full"
            />
        </div>
        <div class="w-[280px] h-auto">
            <img
                src="https://www.hanwujinian.com/public/static/home/pc1/img/index/title/block_1.png"
                alt=""
                class="w-full h-full"
            />
        </div>
    </div>
</template>
