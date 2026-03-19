<template>

    <swiper
        :modules="[FreeMode]"
        :slides-per-view="menuButtons ? 2.52 : (achievs ? 1.15 : 1.2)"
        :space-between="menuButtons ? '4%' : (achievs ? '5%' : '2%')"
        :free-mode="true"
        :breakpoints="
        {
            768: {
                slidesPerView: menuButtons ? 2.52 : (achievs ? 2.2 : 2.2),
                spaceBetween: menuButtons ? '4%' : (achievs ? '4%' : '2%'),
                enabled: menuButtons ? false : true
            }
        }
        "
        class="w-full px-4.5! md:px-[23px]!"
        :class="menuButtons ? 'menu_buttons mt-[calc(87px+2vw)] min-[450px]:mt-[96px] m-auto' : (achievs ? 'achievs mt-[8%] md:mt-[4%]' : 'imgs')"
    >
        <template v-if="menuButtons">
            <swiper-slide v-for="menu in menuButtons" :key="menu" class="w-max! min-[450px]:mr-[16.50px]! rounded-[3.3vw] min-[450px]:rounded-[14.85px] border-daorange border text-[4vw] min-[450px]:text-[18px] text-daorange font-semibold px-[14px] py-[5px]">{{menu.text}}</swiper-slide>
        </template>

        <template v-if="achievs">
            <swiper-slide v-for="achiev in achievs" :key="achiev" class="h-[71vw]! min-[450px]:h-[319.5px]! md:h-auto! rounded-[7vw] min-[450px]:rounded-[48.15px] border-daorange border-2  px-[6.9%] md:px-[4%] py-[6%] md:py-[4%]">
                <div class="text-[8vw] min-[450px]:text-[36px] md:text-[3.5vw] text-daorange font-semibold">{{achiev.title}}</div>
                <div class="text-[3.9vw] min-[450px]:text-[17.5px] font-light mt-[8%]" v-html="achiev.description"></div>
            </swiper-slide>
        </template>

        <template v-if="imgs">
            <swiper-slide v-for="img in imgs" :key="img.id">
                <img :src="getImageUrl(img.src)" alt="" class="rounded-[7vw]">
            </swiper-slide>
        </template>
    </swiper>
</template>

<script setup>
    // Import Swiper Vue.js components
    import 'swiper/css';

    import { Swiper, SwiperSlide } from 'swiper/vue';
    import { FreeMode } from 'swiper/modules';

    const props = defineProps(['menuButtons', 'achievs', 'imgs'])

    const {menuButtons, achievs, imgs} = toRefs(props)

    function getImageUrl(src) {
        // This path must be correct for your file
        return new URL(`${src}`, import.meta.url)
    }


    // Import Swiper styles
    import { toRefs } from 'vue';
</script>


<style>
@media screen and (min-width: 450px) and (max-width: 760px) {
    .menu_buttons > .swiper-wrapper {
        width: 441px !important;
        margin: auto !important;
    }

    .achievs > .swiper-wrapper {
        width: 441px !important;
        margin-right: 10px !important;
    }

    .achievs {
        width: 450px;
    }
}

@media screen and (min-width: 768px) {
    .swiper.achievs {
        background: url(../../../assets/img/bg_barnes_sm.svg) center/70% no-repeat;
    }
}

</style>
