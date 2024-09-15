<template>
    <div class="w-[596px] space-y-3">
        <el-carousel trigger="click" height="269px">
            <el-carousel-item v-for="item in 4" :key="item" class="rounded">
                <h3 class="small justify-center" text="2xl">{{ item }}</h3>
            </el-carousel-item>
        </el-carousel>
        <el-card style="width: 596px; height: 180px">
            <p v-for="o in 4" :key="o" class="text item">
                {{ "List item " + o }}
            </p>
        </el-card>
    </div>
</template>
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
