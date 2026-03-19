<template>
    <div class="max-w-[450px] md:max-w-[820px] px-4.5 md:px-[23px] mt-[15%] min-[450px]:mt-[67.5px] md:mt-[10%] m-auto bg-[url(/resources/assets/img/bg_barnes_sm.svg)] bg-position-[center_top_1.5%] md:bg-none bg-no-repeat">
        <div class="">
            <div class="leading-[120%] md:w-[80%] md:m-auto text-center text-[11vw] min-[450px]:text-[45px] md:text-[9vw] font-semibold">
                Условия проживания
            </div>

            <div class="w-[50%] h-0.5 bg-daorange mt-[10%] md:mt-[6%] m-auto">
            </div>

            <div class="relative md:text-center leading-[170%] text-[4.5vw] min-[450px]:text-[20.25px] md:text-[3vw] font-light mt-[10%] md:mt-[6%]">
                В нашем доме есть всё для вашего комфортного отдыха с семьёй или в компании друзей. На территории находится <span class="font-black text-daorange uppercase">баня из кедрового дерева с чаном, которая топится также кедровыми ДРОВАМИ</span> и мангальная зона, где можно пожарить вкусную еду на костре или просто посидеть вечерком на свежем воздухе
            </div>
        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] mt-[13%]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-white text-[3.9vw] min-[450px]:text-[17.55px] md:text-[2.5vw] text-daorange">ОБЩИЙ ПЛАН</div>
            </div>
            <!-- <img src="../../../../assets/img/generalPlan/gp_photo2.jpg" alt=""> -->

            <div class="md:w-[50%] md:m-auto text-center text-[4.5vw] min-[450px]:text-[20.25px] md:text-[3vw]">
                Закрытая парковка на 2 авто.
                Благоустроенная территория с газонами и туями
            </div>

            <div class="absolute -inset-x-4.5 md:-inset-x-[23px] top-[127%]">
                <swiper
                    :imgs="generalPlanImgs"
                    styles=""
                />
            </div>

        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] mt-[127%] md:mt-[72%]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-white text-[3.9vw] min-[450px]:text-[17.55px] md:text-[2.5vw] text-daorange">МАНГАЛЬНАЯ ЗОНА</div>
            </div>

            <div class="md:w-[50%] md:m-auto text-center text-[4.5vw] min-[450px]:text-[20.25px] md:text-[3vw]">
                В мангальной зоне есть шампуры и решетка, а также печь-казан с дровами
            </div>

            <div class="absolute -inset-x-4.5 md:-inset-x-[23px] top-[127%]">
                <swiper
                    :imgs="barbecueArea"
                />
            </div>
        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] mt-[127%] md:mt-[72%]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-white text-[3.9vw] min-[450px]:text-[17.55px] md:text-[2.5vw] text-daorange">БАНЯ С ЧАНОМ</div>
            </div>

            <div class="text-[4.5vw] min-[450px]:text-[20.25px] md:text-[3vw] leading-[170%]">
                Большой банный чан на 6-8 чел оплачивается отдельно - <span class="font-black text-daorange uppercase">4000 рублей</span>. Разогреваем до +38-40 градусов далее пользуетесь пока не остынет. <span class="font-black text-daorange uppercase">Топим кедровыми дровами</span>. Наполнение чана в стоимость не входит и обговаривается отдельно. Вместимая баня-бочка из кедра с верандой и выходом в чан оплачивается отдельно - <span class="font-black text-daorange uppercase">4000 рублей за 3 часа</span>. В продаже также имеются веники, цены на которые обговариваются отдельно
            </div>

            <div class="flex items-center gap-[3.4vw] min-[450px]:gap-[15.3px] md:gap-[3vw] text-[4.5vw] min-[450px]:text-[20.25px] md:text-[3vw] font-light">
                <div class="w-[25%] md:w-[10%]">
                    <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                        <path d="M14 19.2H14.0104M14 8.8V15.3M27 14C27 6.8201 21.1799 1 14 1C6.8201 1 1 6.8201 1 14C1 21.1799 6.8201 27 14 27C21.1799 27 27 21.1799 27 14Z" stroke="#D58637" stroke-width="10%" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <div class="font-black text-daorange uppercase">
                    Если оплачиваете и баню, и чан, то пользуетесь без ограничений по времени
                </div>
            </div>

            <div class="absolute -inset-x-4.5 top-[106%] md:top-[110%] flex flex-col gap-[3.8vw] min-[450px]:gap-[17.1px]">
                <swiper
                    :imgs="bathHouse1"
                />

                <swiper
                    :imgs="bathHouse2"
                />

                <swiper
                    :imgs="bathHouse3"
                />
            </div>

        </div>
    </div>

    <div class="max-w-[450px] md:max-w-[820px] text-[4.5vw] min-[450px]:text-[20.25px] md:text-[3vw] leading-[170%] px-4.5 mt-[285%] min-[450px]:mt-[1279px] m-auto bg-[url(/resources/assets/img/bg_barnes_sm.svg)] bg-position-[center_top_80%] bg-no-repeat">
        В уютной гостиной можно расслабиться на диване и посмотреть телевизор.
        Красивая современная кухня, чтобы готовить с комфортом. На первом этаже также находится душевая кабина с туалетом и стиральной машиной. На втором этаже две спальни с большими кроватями и телевизорами.
    </div>

    <div class="max-w-[450px] md:max-w-[820px] text-[4.5vw] min-[450px]:text-[20.25px] leading-[170%] px-4.5 mt-[8%] min-[450px]:mt-[36px] m-auto bg-[url(/resources/assets/img/bg_barnes_sm.svg)] bg-position-[center_top_60%] bg-no-repeat">

        <div class="font-black text-daorange uppercase ">
            Мы регулярно проводим генеральную уборку и готовим для вас чистые белоснежные полотенца с резиновыми тапочками
        </div>

        <div class="mt-[11.2%]">
            <div class="flex gap-[5vw] min-[450px]:gap-[18px] items-center">
                <div class="relative font-bold text-[6vw] text-white w-[13.5vw] min-[450px]:w-[60.75px] h-[13.5vw] min-[450px]:h-[60.75px] rounded-full bg-daorange flex items-center justify-center">
                    6
                </div>

                <div class=" text-[5.5vw] min-[450px]:text-[24.75px] font-bold">
                    <div>
                        Спальных мест
                    </div>

                    <div class=" h-[1px] bg-daorange">

                    </div>

                    <div class=" h-[1px] bg-daorange mt-[3px]">

                    </div>
                </div>
            </div>

            <div class="flex gap-[5vw] min-[450px]:gap-[18px] items-center mt-[5%] min-[380px]:mt-[7%]">
                <div class="relative font-bold text-[6vw] text-white w-[13.5vw] min-[450px]:w-[60.75px] h-[13.5vw] min-[450px]:h-[60.75px] rounded-full bg-daorange flex items-center justify-center">
                    12
                </div>

                <div class=" text-[5.5vw] min-[450px]:text-[24.75px] font-bold">
                    <div>
                        Человек вместимость
                    </div>

                    <div class="h-[1px] bg-daorange">

                    </div>

                    <div class="h-[1px] bg-daorange mt-[3px]">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[450px] md:max-w-[820px] leading-[170%] px-4.5 mt-[17%] min-[450px]:mt-[67.5px] m-auto">
        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-white text-[3.9vw] min-[450px]:text-[17.55px] md:text-[3vw] text-daorange">УЮТНАЯ ГОСТИНАЯ</div>
            </div>

            <div class="absolute -inset-x-4.5 top-[227%]">
                <swiper
                    :imgs="livingRoom"
                />
            </div>
        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] mt-[127%]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-white text-[3.9vw] min-[450px]:text-[17.55px] md:text-[3vw] text-daorange">БОЛЬШИЕ СПАЛЬНИ</div>
            </div>

            <div class="absolute -inset-x-4.5 top-[227%]">
                <swiper
                    :imgs="bedRoom"
                />
            </div>
        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] mt-[127%]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-white text-[3.9vw] min-[450px]:text-[17.55px] md:text-[3vw] text-daorange">ДУШ И ТУАЛЕТ</div>
            </div>

            <div class="absolute -inset-x-4.5 top-[227%]">
                <swiper
                    :imgs="bathRoom"
                />
            </div>
        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] mt-[127%]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-white text-[3.9vw] min-[450px]:text-[17.55px] md:text-[3vw] text-daorange">СОВРЕМЕННАЯ КУХНЯ</div>
            </div>

            <div class="text-center text-[4.5vw] min-[450px]:text-[20.25px]">
                У нас есть всё для вашего комфортного приготовления еды:
                духовой шкаф, микроволновка, холодильник, варочная поверхность. <br/> И, что самое главное, <span class="font-black text-daorange uppercase">всё в отличном состоянии</span>
            </div>

            <div class="absolute -inset-x-4.5 top-[120%]">
                <swiper
                    :imgs="modernCitchen"
                />
            </div>
        </div>
    </div>

</template>

<script setup>
import swiper from '@/components/reusable/swiper.vue';

let generalPlanImgs = {
    photo1: {
        id: 1,
        src: '../../../assets/img/generalPlan/gp_photo1.png'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/generalPlan/gp_photo2.png'
    },
    photo3: {
        id: 3,
        src: '../../../assets/img/generalPlan/gp_photo3.png'
    },
    photo4: {
        id: 4,
        src: '../../../assets/img/generalPlan/gp_photo4.png'
    },
}

let barbecueArea = {
    photo1: {
        id: 1,
        src: '../../../assets/img/barbecueArea/ba_photo1.png'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/barbecueArea/ba_photo2.png'
    },
    photo3: {
        id: 3,
        src: '../../../assets/img/barbecueArea/ba_photo3.png'
    },
    photo4: {
        id: 4,
        src: '../../../assets/img/barbecueArea/ba_photo4.png'
    },
}

let bathHouse1 = {
    photo1: {
        id: 1,
        src: '../../../assets/img/bathHouse/bh_photo1.png'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/bathHouse/bh_photo2.png'
    },
    photo3: {
        id: 3,
        src: '../../../assets/img/bathHouse/bh_photo3.png'
    },
    photo4: {
        id: 4,
        src: '../../../assets/img/bathHouse/bh_photo4.png'
    },
}

let bathHouse2 = {
    photo1: {
        id: 1,
        src: '../../../assets/img/bathHouse/bh_photo5.png'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/bathHouse/bh_photo6.png'
    },
    photo3: {
        id: 3,
        src: '../../../assets/img/bathHouse/bh_photo7.png'
    },
    photo4: {
        id: 4,
        src: '../../../assets/img/bathHouse/bh_photo8.png'
    }
}

let bathHouse3 = {
    photo1: {
        id: 1,
        src: '../../../assets/img/bathHouse/bh_photo9.png'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/bathHouse/bh_photo10.png'
    }
}

let livingRoom = {
    photo1: {
        id: 1,
        src: '../../../assets/img/livingRoom/lr_photo1.png'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/livingRoom/lr_photo2.png'
    },
    photo3: {
        id: 3,
        src: '../../../assets/img/livingRoom/lr_photo3.png'
    },
    photo4: {
        id: 4,
        src: '../../../assets/img/livingRoom/lr_photo4.png'
    }
}

let bedRoom = {
    photo1: {
        id: 1,
        src: '../../../assets/img/bedRoom/br_photo1.png'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/bedRoom/br_photo2.png'
    },
    photo3: {
        id: 3,
        src: '../../../assets/img/bedRoom/br_photo3.png'
    },
    photo4: {
        id: 4,
        src: '../../../assets/img/bedRoom/br_photo4.png'
    }
}

let bathRoom = {
    photo1: {
        id: 1,
        src: '../../../assets/img/bathRoom/st_photo1.png'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/bathRoom/st_photo2.png'
    },
    photo3: {
        id: 3,
        src: '../../../assets/img/bathRoom/st_photo3.png'
    },
    photo4: {
        id: 4,
        src: '../../../assets/img/bathRoom/st_photo4.png'
    }
}

let modernCitchen = {
    photo1: {
        id: 1,
        src: '../../../assets/img/modernCitchen/mc_photo1.png'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/modernCitchen/mc_photo2.png'
    }
}
</script>
