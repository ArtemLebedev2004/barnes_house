<template>
    <div class="bg-linear-to-br from-[#1F1F1F] to-black">
        <div class="relative max-w-[450px] min-[768px]:max-w-[820px] lg:max-w-[1030px] m-auto mt-[12%] min-[450px]:mt-[54px] pt-[26vw] min-[450px]:pt-[117px] min-[768px]:pt-[20vw] min-[820px]:pt-[164px] min-[1024px]:pt-35 pb-[40%] min-[450px]:pb-[180px] min-[768px]:pb-[200px] px-4.5 min-[768px]:px-[23px] lg:px-[30px] m-auto  ">
            <div class="absolute inset-x-[3%] min-[768px]:inset-x-[4.5%] min-[1024px]:inset-x-[25px] top-[0.7%] min-[768px]:top-[40px] z-2 m-auto">
                <img src="../../../../assets/img/bg_stars.svg" alt="" class="min-[768px]:hidden w-full">
                <img src="../../../../assets/img/bg_stars_md.svg" alt="" class="hidden min-[768px]:block min-[1024px]:hidden w-full">
                <img src="../../../../assets/img/bg_stars_lg.svg" alt="" class="hidden min-[1024px]:block w-full">
            </div>

            <div class="min-[768px]:w-[80%] min-[1024px]:w-full min-[768px]:m-auto relative text-[rgb(31,31,31)] text-[19vw] min-[450px]:text-[85px] min-[768px]:text-[14vw] min-[820px]:text-[114.8px] min-[1024px]:text-[80px] font-black leading-[100%] min-[450px]:leading-[85px] min-[768px]:leading-[90%] text-center min-[1024px]:text-left">
                <div class="stroke_text relative z-1">
                    BARNES HOUSE
                </div>

                <div class="stroke_text absolute z-0 top-[7px] left-[14px] text-transparent ">
                    BARNES HOUSE
                </div>
            </div>

            <div class="hidden min-[1024px]:block text-right mt-[10%] min-[1024px]:mt-10 text underline text-[11vw] min-[450px]:text-[49.5px] min-[768px]:text-[8vw] min-[820px]:text-[65.6px] min-[1024px]:text-[55px] text-white font-extralight italic">
                без лишних слов...
            </div>

            <div class="min-[1024px]:hidden flex flex-col mt-[10%] px-8 min-[768px]:px-24 min-[1024px]:px-50 underline text-[11vw] min-[450px]:text-[49.5px] min-[768px]:text-[8vw] min-[820px]:text-[65.6px] text-white font-extralight italic">
                <div class=" ">без</div>
                <div class="text-center ">лишних</div>
                <div class="text-right">слов...</div>
            </div>

            <div class="min-[768px]:w-[60%] min-[1024px]:w-full min-[768px]:m-auto flex flex-col min-[1024px]:flex-row gap-[13vw] min-[450px]:gap-[58.5px] mt-[34%] min-[768px]:mt-[15%] min-[1024px]:mt-[10%]">
                <div class="relative border-daorange border-3 p-[3.5%] min-[1024px]:p-4 rounded-[12.7vw] min-[450px]:rounded-[55.35px] ">
                    <img src="../../../../assets/img/noWords/nowords_photo1.jpg" alt="" class="rounded-[9.2vw] min-[450px]:rounded-[41.4px] pointer-events-none">
                </div>

                <div class="relative border-daorange border-3 p-[3.5%] min-[1024px]:p-4 rounded-[12.7vw] min-[450px]:rounded-[55.35px]">
                    <img src="../../../../assets/img/noWords/nowords_photo2.jpg" alt="" class="rounded-[9.2vw] min-[450px]:rounded-[41.4px] pointer-events-none">
                </div>

                <div class="relative border-daorange border-3 p-[3.5%] min-[1024px]:p-4 rounded-[12.7vw] min-[450px]:rounded-[55.35px]">
                    <img src="../../../../assets/img/noWords/nowords_photo3.jpg" alt="" class="rounded-[9.2vw] min-[450px]:rounded-[41.4px] pointer-events-none">
                </div>
            </div>
        </div>
    </div>

</template>

<script setup></script>

<style scoped>
.stroke_text {
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: #D58637;
}
</style>
