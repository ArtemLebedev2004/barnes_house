<template>

    <swiper
        :modules="[FreeMode]"
        :slides-per-view="menuButtons ? 2.9 : (achievs ? 1.15 : 1.2)"
        :space-between="menuButtons ? '4%' : (achievs ? '5%' : '2%')"
        :free-mode="true"
        :breakpoints="
        {
            450: {
                slidesPerView: menuButtons ? 3.05 : (achievs ? 1.15 : 1.3),
                spaceBetween: menuButtons ? '2%' : (achievs ? '5%' : '2%'),
            },
            768: {
                slidesPerView: menuButtons ? 4 : (achievs ? 1.7 : 2.2),
                spaceBetween: achievs ? '4%' : '2%',

            },
            1024: {
                slidesPerView: menuButtons ? 4 : (achievs ? 2.7 : 3.2),
                spaceBetween: achievs ? '3%' : '2%',
                grabCursor: true,
            },
            1280: {
                slidesPerView:  4,
                spaceBetween: achievs ? '3%' : '2%',
                grabCursor: false,
            },
            1280: {
                slidesPerView:  4,
                spaceBetween: achievs ? '3%' : '3%',
                grabCursor: false,
            }
        }
        "
        class="w-full min-[450px]:max-w-[414px] min-[768px]:max-w-[820px] min-[1024px]:max-w-[1030px] xl:max-w-[1280px] 2xl:max-w-[1400px] px-4.5! min-[450px]:px-0! min-[768px]:px-[23px]! min-[1024px]:px-[30px]! xl:px-[47px]!"
        :class="menuButtons ? 'lg:hidden! max-w-[450px]  menu_buttons mt-[calc(87px+2vw)] min-[450px]:mt-[96px]  min-[1024px]:max-w-full m-auto' : (achievs ? '    achievs mt-[8%] min-[768px]:mt-[4%] min-[820px]:mt-[32.8px] xl:mt-15' : (Object.keys(imgs).length == 2 ? (imgs.photoCitchen1 ? 'imgs imgs2 imgsCitchen' : ' imgs imgs2') : 'imgs'))"
    >
        <template v-if="menuButtons">
            <swiper-slide  v-for="menu in menuButtons" :key="menu" @click.prevent="SmoothVerticalScrolling(menu.class, 275, 'top')" class="w-max! min-[450px]:mr-[16.50px]! rounded-[3.3vw] min-[450px]:rounded-[14.85px] border-daorange border text-[4vw] min-[450px]:text-[18px] text-daorange font-semibold px-[14px] py-[5px]">{{menu.text}}</swiper-slide>
        </template>

        <template v-if="achievs">
            <swiper-slide v-for="achiev in achievs" :key="achiev" class="h-[95vw]! min-[450px]:h-[430px]! min-[768px]:h-auto! rounded-[8vw] min-[450px]:rounded-[48.15px] min-[1024px]:rounded-[37px]  border-daorange border-2  px-[6.9%] min-[768px]:px-[4%] min-[1024px]:px-7 py-[6%] min-[768px]:py-[4%] min-[1024px]:py-5">
                <div class="text-[8vw] min-[450px]:text-[36px] min-[768px]:text-[4vw] min-[820px]:text-[32.8px] min-[1024px]:text-[28px] text-daorange font-semibold transition-all duration-150 lg:hover:rotate-[5deg]">{{achiev.title}}</div>
                <div class="text-[3.9vw] min-[450px]:text-[17.5px] min-[768px]:text-[2.25vw] min-[820px]:text-[18.45px] min-[1024px]:text-[14px] font-light mt-[8%] min-[1024px]:mt-3" v-html="achiev.description"></div>
            </swiper-slide>
        </template>

        <template v-if="imgs">
            <swiper-slide v-for="img in imgs" :key="img.id" >
                <img :src="getImageUrl(img.src)" alt="" class="transition-all duration-150 lg:hover:rotate-[3deg]">
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

    function SmoothVerticalScrolling(e, time, where) {
    let el = document.getElementById(e);
    let eTop = el.getBoundingClientRect().top;
    let eAmt = eTop/102;
    let curTime = 0;
    while (curTime <= time) {
        window.setTimeout(SVS_B, curTime, eAmt, where);
        curTime += time / 100;
    }
}

function SVS_B(eAmt, where) {
    if(where == "center" || where == "")
        window.scrollBy(0, eAmt / 2);
    if (where == "top")
        window.scrollBy(0, eAmt);
}
</script>


<style>
@media screen and (min-width: 450px) and (max-width: 767px) {
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

    .imgs2 > .swiper-wrapper {
        justify-content: center;
        margin-left: 2%;
    }

    .imgs2 > .swiper-wrapper > .swiper-slide {
        width: 50% !important;
    }

    .imgsCitchen > .swiper-wrapper > .swiper-slide {
        width: 44% !important;
    }
}

@media screen and (min-width: 1024px) {
    .swiper.achievs {
        background: url(../../../assets/img/bg_barnes_sm.svg) center/50% no-repeat;
    }

    .imgs2 > .swiper-wrapper > .swiper-slide {
        width: 380px !important;
    }

    .imgsCitchen > .swiper-wrapper > .swiper-slide {
        width: 287px !important;
    }
}

@media screen and (min-width: 1280px) {
    .swiper.achievs {
        background: url(../../../assets/img/bg_barnes_xl.svg) center/80% no-repeat;
    }

    .imgs2 > .swiper-wrapper > .swiper-slide {
        width: 340px !important;
    }

    .imgsCitchen > .swiper-wrapper > .swiper-slide {
        width: 286px !important;
    }
}

@media screen and (min-width: 1536px) {
    .imgs2 > .swiper-wrapper > .swiper-slide {
        width: 380px !important;
    }

    .imgsCitchen > .swiper-wrapper > .swiper-slide {
        width: 300px !important;
    }
}
</style>
