<template>
    <div class="max-w-[450px] min-[768px]:max-w-[820px] min-[1024px]:max-w-[1030px] xl:max-w-[1280px] 2xl:max-w-[1400px] px-4.5 min-[768px]:px-[23px] min-[1024px]:px-[30px] xl:px-[47px] mt-[15%] min-[450px]:mt-[67.5px] min-[768px]:mt-[10%] min-[820px]:mt-[82px] min-[1024px]:mt-[100px] m-auto bg-[url(/resources/assets/img/bg_barnes_sm.svg)] bg-position-[center_top_1.5%] min-[768px]:bg-none bg-no-repeat">
        <div class="">
            <div class="leading-[120%] min-[768px]:w-[80%] min-[768px]:m-auto text-center text-[11vw] min-[450px]:text-[45px] min-[768px]:text-[9vw] min-[820px]:text-[73.8px] min-[1024px]:text-[60px] xl:text-[70px] 2xl:text-[75px] font-semibold">
                Условия проживания
            </div>

            <div class="w-[50%] min-[1024px]:w-[35%] xl:w-[27%] h-0.5 bg-daorange mt-[10%] min-[768px]:mt-[6%] xl:mt-12 m-auto">
            </div>

            <div class="relative min-[1024px]:w-[80%] min-[1024px]:mx-auto min-[768px]:text-center leading-[170%] text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px] min-[1024px]:text-[16px] font-light mt-[10%] min-[768px]:mt-[6%] xl:mt-12">
                В нашем доме есть всё для вашего комфортного отдыха с семьёй или в компании друзей. На территории находится <span class="font-black text-daorange uppercase">баня из кедрового дерева с чаном, которая топится также кедровыми ДРОВАМИ</span> и зона с костром, где можно пожарить вкусную еду или просто посидеть вечерком на свежем воздухе
            </div>
        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] min-[1024px]:gap-[40px] mt-[13%] min-[1024px]:mt-[100px]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full xl:w-[80%] m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] min-[1024px]:px-[28px] bg-[#F2F2F2] text-[3.9vw] min-[450px]:text-[17.55px] min-[768px]:text-[2.3vw] min-[820px]:text-[18.86px] min-[1024px]:text-[16px] text-daorange">ОБЩИЙ ПЛАН</div>
            </div>
            <!-- <img src="../../../../assets/img/generalPlan/gp_photo2.jpg" alt=""> -->

            <div class="min-[768px]:w-[51%] min-[1024px]:w-[500px] xl:w-full min-[768px]:m-auto text-center text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px] min-[1024px]:text-[16px]">
                Закрытая парковка на 2 авто.
                Благоустроенная территория с газонами и туями
            </div>

            <div class="absolute -inset-x-4.5 min-[768px]:-inset-x-[23px] min-[1024px]:-inset-x-[30px] xl:-inset-x-[47px] top-[127%] min-[1024px]:top-[160px] xl:top-[155%]">
                <swiper
                    :imgs="generalPlanImgs"
                />
            </div>

        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] min-[1024px]:gap-[40px] mt-[127%] min-[768px]:mt-[72%]  min-[1024px]:mt-[480px]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full xl:w-[80%] m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] min-[1024px]:px-[28px] bg-[#F2F2F2] text-[3.9vw] min-[450px]:text-[17.55px] min-[768px]:text-[2.3vw] min-[820px]:text-[18.86px] min-[1024px]:text-[16px] text-daorange">ЗОНА С КОСТРОМ</div>
            </div>

            <div class="min-[768px]:w-[50%] min-[1024px]:w-[500px] xl:w-full min-[768px]:m-auto text-center text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px] min-[1024px]:text-[16px]">
                В зоне с костром есть шампуры и решетка, а также печь-казан с дровами
            </div>

            <div class="absolute -inset-x-4.5 min-[768px]:-inset-x-[23px] min-[1024px]:-inset-x-[30px] xl:-inset-x-[47px] top-[127%] min-[1024px]:top-[160px] xl:top-[155%]">
                <swiper
                    :imgs="barbecueArea"
                />
            </div>
        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] min-[1024px]:gap-[40px] mt-[127%] min-[768px]:mt-[72%]  min-[1024px]:mt-[480px]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full xl:w-[80%] m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] min-[1024px]:px-[28px] bg-[#F2F2F2] text-[3.9vw] min-[450px]:text-[17.55px] min-[768px]:text-[2.3vw] min-[820px]:text-[18.86px] min-[1024px]:text-[16px] text-daorange">БАНЯ С ЧАНОМ</div>
            </div>

            <div class=" text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px] min-[1024px]:text-[16px] xl:text-center xl:w-[80%] xl:mx-auto">
                Большой банный чан из нержавеющей стали на 6-8 чел оплачивается отдельно - <span class="font-black text-daorange uppercase">4000 рублей</span>. Разогреваем до +38-40 градусов далее пользуетесь пока не остынет. <span class="font-black text-daorange uppercase">Топим кедровыми дровами</span>. Наполнение чана в стоимость не входит и обговаривается отдельно. Вместимая баня-бочка из кедра с верандой и выходом в чан оплачивается отдельно - <span class="font-black text-daorange uppercase">4000 рублей за 3 часа</span>. В продаже также имеются веники, цены на которые обговариваются отдельно
            </div>

            <div class="flex items-center min-[1024px]:justify-center gap-[3.4vw] min-[450px]:gap-[15.3px] min-[768px]:gap-[3vw] min-[1024px]:gap-[20px] text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px] min-[1024px]:text-[16px] font-light">
                <div class="w-[25%] min-[768px]:w-[10%] min-[1024px]:w-[40px]">
                    <svg viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                        <path d="M14 19.2H14.0104M14 8.8V15.3M27 14C27 6.8201 21.1799 1 14 1C6.8201 1 1 6.8201 1 14C1 21.1799 6.8201 27 14 27C21.1799 27 27 21.1799 27 14Z" stroke="#D58637" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" class="stroke-[10%]"/>
                    </svg>
                </div>

                <div class="font-black text-daorange uppercase">
                    Если оплачиваете и баню, и чан, то пользуетесь без ограничений по времени
                </div>
            </div>

            <div class="absolute -inset-x-4.5 min-[1024px]:-inset-x-[30px] xl:-inset-x-[47px] top-[106%] min-[768px]:top-[110%] min-[1024px]:top-[280px] flex flex-col gap-[3.8vw] min-[450px]:gap-[17.1px]">
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

    <div class="max-w-[450px] min-[768px]:max-w-[820px] min-[1024px]:max-w-[1030px] xl:max-w-[1000px] 2xl:max-w-[1150px] text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px] min-[1024px]:text-[16px] xl:text-center leading-[170%] px-4.5 min-[768px]:px-[23px] min-[1024px]:px-[30px] xl:px-[47px] mt-[285%]  min-[450px]:mt-[1279px] min-[768px]:mt-[160%] min-[820px]:mt-[1312px] min-[1024px]:mt-[1140px] xl:mt-[1170px] 2xl:mt-[1200px] m-auto bg-[url(/resources/assets/img/bg_barnes_sm.svg)] bg-position-[center_top_80%] min-[1024px]:bg-center min-[768px]:bg-size-[80%] min-[1024px]:bg-size-[60%] bg-no-repeat">
        <div>
            В уютной гостиной можно расслабиться на диване и посмотреть телевизор.
            Красивая современная кухня, чтобы готовить с комфортом. На первом этаже также находится душевая кабина с туалетом и стиральной машиной. На втором этаже две спальни с большими кроватями и телевизорами.
            В доме также есть утюг, фен, гладильная доска и обувь для дома и бани
        </div>

        <div class="hidden min-[1024px]:block font-black text-daorange uppercase mt-10">
            Мы регулярно проводим генеральную уборку и готовим для вас чистое белоснежное постельное бельё и полотенца с ароматом альпийской свежести
        </div>

        <div class="hidden min-[1024px]:flex w-max m-auto  gap-15 items-center mt-10">
            <div class="flex gap-[5vw] min-[450px]:gap-[18px] min-[768px]:gap-[3vw] min-[1024px]:gap-5 items-center">
                <div class="relative font-bold text-[40px]  text-white w-[72px] h-[72px] rounded-full bg-daorange flex items-center justify-center">
                    6
                </div>

                <div class=" text-[28px] font-bold">
                    <div>
                        Спальных мест
                    </div>

                    <div class=" h-[1px] min-[768px]:h-[1.5px] bg-daorange">

                    </div>

                    <div class=" h-[1px] min-[768px]:h-[1.5px] bg-daorange mt-[3px] min-[768px]:mt-[4px]">

                    </div>
                </div>
            </div>

            <div class="flex gap-5 items-center ">
                <div class="relative font-bold text-[40px] text-white w-[72px] h-[72px] rounded-full bg-daorange flex items-center justify-center">
                    12
                </div>

                <div class=" text-[28px] font-bold">
                    <div>
                        Человек вместимость
                    </div>

                    <div class="h-[1px] min-[768px]:h-[1.5px] bg-daorange">

                    </div>

                    <div class="h-[1px] min-[768px]:h-[1.5px] bg-daorange mt-[3px] min-[768px]:mt-[4px]">

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="min-[1024px]:hidden max-w-[450px] min-[768px]:max-w-[820px] min-[1024px]:max-w-[1030px] text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px] min-[1024px]:text-[16px] leading-[170%] px-4.5 min-[768px]:px-[23px] min-[1024px]:px-[30px] mt-[8%] min-[450px]:mt-[36px] m-auto bg-[url(/resources/assets/img/bg_barnes_sm.svg)] bg-position-[center_top_60%] min-[768px]:bg-size-[80%] bg-no-repeat">

        <div class="font-black text-daorange uppercase ">
            Мы регулярно проводим генеральную уборку и готовим для вас чистое белоснежное постельное бельё и полотенца с ароматом альпийской свежести
        </div>

        <div class="mt-[11.2%] min-[768px]:mt-[6%] min-[768px]:w-max min-[768px]:m-auto min-[1024px]:flex gap-15 items-center">
            <div class="flex gap-[5vw] min-[450px]:gap-[18px] min-[768px]:gap-[3vw] min-[1024px]:gap-5 items-center">
                <div class="relative font-bold text-[6vw] min-[450px]:text-[27px] min-[768px]:text-[6vw] min-[820px]:text-[49.2px] text-white w-[13.5vw] min-[450px]:w-[60.75px] min-[768px]:w-[10vw] min-[820px]:w-[82px] h-[13.5vw] min-[450px]:h-[60.75px] min-[768px]:h-[10vw] min-[820px]:h-[82px] rounded-full bg-daorange flex items-center justify-center">
                    6
                </div>

                <div class=" text-[5.5vw] min-[450px]:text-[24.75px] min-[768px]:text-[4vw] min-[820px]:text-[32.8px] font-bold">
                    <div>
                        Спальных мест
                    </div>

                    <div class=" h-[1px] min-[768px]:h-[1.5px] bg-daorange">

                    </div>

                    <div class=" h-[1px] min-[768px]:h-[1.5px] bg-daorange mt-[3px] min-[768px]:mt-[4px]">

                    </div>
                </div>
            </div>

            <div class="flex gap-[5vw] min-[450px]:gap-[18px] min-[768px]:gap-[3vw] min-[1024px]:gap-5 items-center mt-[5%] min-[380px]:mt-[7%] min-[768px]:mt-[8%] min-[1024px]:mt-0">
                <div class="relative font-bold text-[6vw] min-[450px]:text-[27px] min-[768px]:text-[6vw] min-[820px]:text-[49.2px] text-white w-[13.5vw] min-[450px]:w-[60.75px] min-[768px]:w-[10vw] min-[820px]:w-[82px] h-[13.5vw] min-[450px]:h-[60.75px] min-[768px]:h-[10vw] min-[820px]:h-[82px] rounded-full bg-daorange flex items-center justify-center">
                    12
                </div>

                <div class=" text-[5.5vw] min-[450px]:text-[24.75px] min-[768px]:text-[4vw] min-[820px]:text-[32.8px] font-bold">
                    <div>
                        Человек вместимость
                    </div>

                    <div class="h-[1px] min-[768px]:h-[1.5px] bg-daorange">

                    </div>

                    <div class="h-[1px] min-[768px]:h-[1.5px] bg-daorange mt-[3px] min-[768px]:mt-[4px]">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[450px] min-[768px]:max-w-[820px] min-[1024px]:max-w-[1030px] xl:max-w-[1280px] 2xl:max-w-[1400px] leading-[170%] px-4.5 min-[768px]:px-[23px] min-[1024px]:px-[30px] xl:px-[47px] mt-[17%] min-[450px]:mt-[67.5px] min-[768px]:mt-[13%] min-[820px]:mt-[106.6px] m-auto">
        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full xl:w-[80%] m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-[#F2F2F2] text-[3.9vw] min-[450px]:text-[17.55px] min-[768px]:text-[2.3vw] min-[820px]:text-[18.86px] min-[1024px]:text-[16px] text-daorange">УЮТНАЯ ГОСТИНАЯ</div>
            </div>

            <div class="absolute -inset-x-4.5 min-[1024px]:-inset-x-[30px] xl:-inset-x-[47px] top-[227%] min-[768px]:top-[290%] min-[1024px]:top-[80px]">
                <swiper
                    :imgs="livingRoom"
                />
            </div>
        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] mt-[127%] min-[768px]:mt-[69%] min-[1024px]:mt-[470px] xl:mt-[460px]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full xl:w-[80%] m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-[#F2F2F2] text-[3.9vw] min-[450px]:text-[17.55px] min-[768px]:text-[2.3vw] min-[820px]:text-[18.86px] min-[1024px]:text-[16px] text-daorange">БОЛЬШИЕ СПАЛЬНИ</div>
            </div>

            <div class="absolute -inset-x-4.5 min-[1024px]:-inset-x-[30px] xl:-inset-x-[47px] top-[227%] min-[768px]:top-[290%] min-[1024px]:top-[80px]">
                <swiper
                    :imgs="bedRoom"
                />
            </div>
        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] mt-[127%] min-[768px]:mt-[69%] min-[1024px]:mt-[470px] xl:mt-[460px]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full xl:w-[80%] m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-[#F2F2F2] text-[3.9vw] min-[450px]:text-[17.55px] min-[768px]:text-[2.3vw] min-[820px]:text-[18.86px] min-[1024px]:text-[16px] text-daorange">ДУШ И ТУАЛЕТ</div>
            </div>

            <div class="absolute -inset-x-4.5 min-[1024px]:-inset-x-[30px] xl:-inset-x-[47px] top-[227%] min-[768px]:top-[290%] min-[1024px]:top-[80px]">
                <swiper
                    :imgs="bathRoom"
                />
            </div>
        </div>

        <div class="relative flex flex-col gap-[7.5vw] min-[450px]:gap-[33.75px] mt-[127%] min-[768px]:mt-[69%] min-[1024px]:mt-[470px] xl:mt-[460px]">
            <div class="relative">
                <div class="absolute inset-0 h-px w-full xl:w-[80%] m-auto bg-daorange -z-1"></div>
                <div class="w-max m-auto px-[5%] bg-[#F2F2F2] text-[3.9vw] min-[450px]:text-[17.55px] min-[768px]:text-[2.3vw] min-[820px]:text-[18.86px] min-[1024px]:text-[16px] text-daorange">СОВРЕМЕННАЯ КУХНЯ</div>
            </div>

            <div class="min-[768px]:w-[90%] xl:w-[80%] min-[768px]:m-auto text-center text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px] min-[1024px]:text-[16px] min-[768px]:leading-[170%]">
                У нас есть всё необходимое: современная кухонная техника для приготовления Вашего праздничного стола, холодильник, духовой шкаф, варочная панель, микроволновая печь, кухонная вытяжка, холодильник, варочная поверхность. <br class="min-[768px]:hidden" /> И, что самое главное, <span class="font-black text-daorange uppercase">всё в отличном состоянии</span>
            </div>

            <div class="absolute -inset-x-4.5 min-[1024px]:-inset-x-[30px] xl:-inset-x-[47px] top-[120%] min-[1024px]:top-[160px]">
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
    photoCitchen1: {
        id: 1,
        src: '../../../assets/img/modernCitchen/mc_photo1.png'
    },
    photoCitchen2: {
        id: 2,
        src: '../../../assets/img/modernCitchen/mc_photo2.png'
    }
}
</script>
