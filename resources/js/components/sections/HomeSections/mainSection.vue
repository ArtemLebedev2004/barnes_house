<template>
    <swiper
        :menuButtons="menuButtons"
    />
    <div class="md:flex flex-row-reverse min-[1024px]:justify-between max-w-[450px] min-[768px]:max-w-[820px] lg:max-w-[1030px] xl:max-w-[1280px] 2xl:max-w-[1400px] px-4.5 min-[768px]:px-[23px] min-[1024px]:px-[30px] xl:px-[47px] m-auto min-[768px]:mt-[5%] min-[820px]:mt-[41px] min-[1024px]:mt-[30px]">
        <div class="md:hidden relative mt-[9.8%] text-[#F2F2F2] text-[19vw] min-[450px]:text-[85px] font-black leading-[100%] min-[450px]:leading-[85px] text-center">
            <div class="stroke_text ">
                BARNES HOUSE
            </div>

            <div class="stroke_text absolute -z-1 top-[7px] left-[14px] text-transparent ">
                BARNES HOUSE
            </div>
        </div>

        <div class="md:hidden w-[50%] h-0.5 bg-daorange mt-[10.3%] m-auto">
        </div>

        <div class="md:hidden w-[80%] m-auto leading-[120%] text-daorange font-black text-[6vw] min-[450px]:text-[27px] text-center mt-[8.4%]">
            Отдых для большой компании друзей
        </div>

        <div class="min-[768px]:w-[43%] min-[1024px]:w-[36%] xl:w-[38.5%] 2xl:w-[37.7%] relative border-daorange border-3 p-[3.5%] min-[768px]:p-[1.65%] min-[1024px]:p-3 xl:p-3.5 2xl:p-4 rounded-[12.3vw] min-[450px]:rounded-[55.35px] min-[768px]:rounded-[6vw]  min-[820px]:rounded-[49.2px] 2xl:rounded-[55px]  mt-[9.4%] min-[768px]:mt-0">
            <div class="relative">
                <img src="../../../../assets/img/main_img.jpg" alt="" class="rounded-[9.2vw] min-[450px]:rounded-[41.4px] min-[768px]:rounded-[4.3vw] min-[820px]:rounded-[35.26px] xl:rounded-[38px] 2xl:rounded-[42px] pointer-events-none">

                <div class="absolute flex gap-[9px] 2xl:gap-3 right-[7%] top-[6%]">
                    <div class="bg-white text-[4.5vw] min-[450px]:text-[20px] min-[768px]:text-[2.2vw] min-[820px]:text-[18px] 2xl:text-[20px] px-5 flex items-center rounded-full">
                        Консультация
                    </div>

                    <a href="tel:89374541087" class="md:hidden relative w-[12vw] min-[450px]:w-[53.5px] min-[768px]:w-[6vw] min-[820px]:w-[49.19px] h-[12vw]  min-[450px]:h-[53.5px] min-[768px]:h-[6vw] min-[820px]:h-[49.19px] rounded-full bg-daorange flex items-center justify-center">
                        <img src="../../../../assets/icons/phone.svg" alt="" class="w-[40%]">
                    </a>

                    <div @click.prevent="SmoothVerticalScrolling('booking', 275, 'top')" class="hidden relative w-[12vw] min-[450px]:w-[53.5px] min-[768px]:w-[6vw] min-[820px]:w-[49.19px] 2xl:w-[60px] h-[12vw]  min-[450px]:h-[53.5px] min-[768px]:h-[6vw] min-[820px]:h-[49.19px] 2xl:h-[60px] rounded-full bg-daorange md:flex items-center justify-center cursor-pointer">
                        <img src="../../../../assets/icons/phone.svg" alt="" class="w-[40%]">
                    </div>
                </div>

                <div class="absolute inset-x-0 top-[72.5%] bottom-0 rounded-b-[9.2vw] min-[768px]:rounded-b-[4.3vw] min-[820px]:rounded-b-[35.26px] min-[450px]:rounded-b-[41.4px] xl:rounded-b-[38px] 2xl:rounded-b-[42px]   bg-linear-to-t from-black/65 from-53% ">
                    <div class="flex flex-col gap-[1vw] min-[450px]:gap-[4.5px] absolute left-[8%] min-[768px]:left-[6%] bottom-[20%] min-[768px]:bottom-[22%] leading-[7vw] min-[450px]:leading-[31px] min-[768px]:leading-[120%] text-white text-[6.5vw] min-[450px]:text-[29px] min-[768px]:text-[3vw]  min-[820px]:text-[24.6px] min-[1024px]:text-[25px] xl:text-[35px] 2xl:text-[36px]">
                        <div class="w-max ">
                            <span class="font-bold italic">Место</span> для вашего
                            <div class="bg-daorange h-[2px]">
                            </div>
                        </div>

                        <div class="w-max ">
                            комфортного отдыха
                            <div class="bg-daorange h-[2px]">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="
            min-[768px]:w-[57%] min-[1024px]:w-[56.5%]
            relative
            text-[10vw] min-[450px]:text-[45px] min-[768px]:text-[5.5vw] min-[820px]:text-[45.1px] min-[1024px]:text-[39.5px] xl:text-[45px] 2xl:text-[50px]
            mt-[9.5%] min-[768px]:mt-0
            pt-[16.7%] min-[768px]:pt-[10%] min-[1024px]:pt-3 xl:pt-0
            min-[768px]:pr-[4.8%] min-[1024px]:pr-0
        ">
            <header class="hidden xl:block">
                <div class="flex justify-between items-center text-[14px]">
                    <div class="w-[6%]">
                        <router-link to="/">
                            <img src="../../../../assets/icons/main_logo.svg" alt="" >
                        </router-link>
                    </div>

                    <div class="flex gap-8">
                        <a @click.prevent="SmoothVerticalScrolling('services', 275, 'top')"  href="#services">
                            Условия проживания
                            <div class="bg-daorange h-[1px]"></div>
                        </a>
                        <a @click.prevent="SmoothVerticalScrolling('booking', 275, 'top')" href="#booking">
                            Бронирование
                            <div class="bg-daorange h-[1px]"></div>
                        </a>
                        <a @click.prevent="SmoothVerticalScrolling('rules', 275, 'top')" href="#rules">
                            Наши правила
                            <div class="bg-daorange h-[1px]"></div>
                        </a>
                        <a @click.prevent="SmoothVerticalScrolling('map', 275, 'top')"  href="#map">
                            Наш адрес
                            <div class="bg-daorange h-[1px]"></div>
                        </a>
                    </div>
                </div>

            </header>

            <div class="hidden min-[1024px]:block text-[20px] font-bold xl:mt-10">Отдых для большой компании друзей</div>

            <div class="

                absolute -z-1
                font-bold italic text-white
                bg-daorange
                rounded-r-[4.5vw] min-[450px]:rounded-r-[20.25px] min-[450px]:rounded-l-[20.25px] min-[768px]:rounded-l-none min-[825px]:rounded-l-[20.25px] min-[1024px]:rounded-l-none min-[1040px]:rounded-l-[20.25px]
                -left-[6%] min-[450px]:left-0 min-[768px]:-left-[6%] min-[825px]:left-0 min-[1024px]:-left-[6%] min-[1040px]:left-0 min-[1280px]:-left-[15%] min-[1300px]:left-0
                top-1 min-[768px]:top-2 min-[1024px]:top-[70px] xl:top-33.5 2xl:top-36
                w-[55%] min-[768px]:w-[53%] min-[1024px]:w-[37.9%] min-[1040px]:w-[32%] min-[1280px]:w-71 min-[1300px]:w-50 min-[1536px]:w-55
                h-[12.5%] min-[768px]:h-auto min-[1024px]:h-[61.44px] xl:h-[65px] 2xl:h-[75px]
                min-[768px]:py-[0.8%] pl-[18px] min-[768px]:pl-[30px]
                flex items-center
            ">
                <span class="lg:hidden">Новый</span>
            </div>

            <div class="font-medium min-[1024px]:mt-7 xl:mt-6 2xl:mt-7.5 min-[1040px]:pl-2.5 min-[1280px]:pl-0 min-[1300px]:pl-3.5">
                <span class="
                    hidden lg:inline
                    font-bold italic text-white
                    mr-8 min-[1024px]:mr-6.25 min-[1040px]:mr-5 2xl:mr-6
                ">Новый</span> загородный дом
            </div>

            <div class="hidden min-[768px]:block mt-[4%] min-[820px]:mt-[16.15px] min-[1024px]:mt-6 xl:mt-3">
                <img src="../../../../assets/img/barnes_house_md.svg" alt="" class="w-full">
            </div>

            <div class="relative text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[2.25vw] min-[820px]:text-[18.45px] min-[1024px]:text-[16px] font-light mt-[5%] min-[768px]:mt-[1.5%] min-[1024px]:mt-2">
                Barnes House - это уютная территория с красивым и современным домом со всеми удобствами, <span class="font-black italic text-daorange">БАНЕЙ ИЗ КЕДРА С ЧАНОМ</span> и мангальной зоной для отдыха в кругу семьи или в компании друзей.

                <div class="absolute top-[14%] min-[768px]:top-[16%] min-[1024px]:top-[22px] bg-daorange w-[31vw] min-[450px]:w-[139.5px] min-[768px]:w-[15.4vw] min-[820px]:w-[126.28px] min-[1024px]:w-[112px] h-px">
                </div>
            </div>

            <div class="md:hidden xl:flex xl:justify-between text-[7vw] min-[450px]:text-[31.5px] md:text-[2.35vw] xl:text-[24px] mt-[8%] md:mt-[6%] xl:mt-6 2xl:mt-6.5 border-daorange border-2 rounded-[10.7vw] min-[450px]:rounded-[48.15px] xl:rounded-full p-[2.8%] md:p-[1.5%] xl:p-1.5 2xl:p-2 text-center">
                <div @click.prevent="SmoothVerticalScrolling('booking', 275, 'top')" class="xl:w-full px-[31px] md:px-[13px] py-[3.6%] xl:py-4 bg-daorange text-white rounded-full cursor-pointer">
                    Забронировать
                </div>

                <div @click.prevent="SmoothVerticalScrolling('services', 275, 'top')" class="xl:w-full px-[31px] md:px-[13px] py-[3.3%] xl:py-4 bg-[#F2F2F2] rounded-full cursor-pointer">
                    Посмотреть дом
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[820px] min-[1024px]:max-w-[1030px] px-[23px] min-[1024px]:px-[30px] m-auto mt-[4%] min-[820px]:mt-[32.8px] ">
        <div class="hidden min-[768px]:flex xl:hidden text-[4vw] min-[820px]:text-[32.8px] min-[1024px]:text-[28px] border-daorange border-2 rounded-full  p-[1.5%] min-[1024px]:p-1.75  text-center">
            <div @click.prevent="SmoothVerticalScrolling('booking', 275, 'top')" class="w-[50%] px-[20px] py-[2.6%] min-[1024px]:py-4 bg-daorange text-white rounded-full">
                Забронировать
            </div>

            <div @click.prevent="SmoothVerticalScrolling('services', 275, 'top')" class="w-[50%] px-[31px] min-[768px]:px-[13px] py-[2.6%] min-[1024px]:py-4 bg-[#F2F2F2] rounded-full">
                Посмотреть дом
            </div>
        </div>
    </div>


    <swiper
        :achievs="achievs"
    />
</template>

<script setup>
import swiper from '@/components/reusable/swiper.vue';

// document.querySelectorAll('a[href^="#"').forEach(link => {
//     console.log(link)
// link.addEventListener('click', function(e) {
//     e.preventDefault();
//     console.log('asfadf')

//     let href = this.getAttribute('href').substring(1);

//     const scrollTarget = document.getElementById(href);

//     // const topOffset = document.querySelector(href).offsetHeight;
//     const topOffset = 0; // если не нужен отступ сверху 
//     const elementPosition = scrollTarget.getBoundingClientRect().top;
//     const offsetPosition = elementPosition - topOffset;

//     window.scrollBy({
//         top: offsetPosition,
//         behavior: 'smooth'
//     });
// });
// });

// function func(href) {

//     const scrollTarget = document.getElementById(href);
//     console.log(scrollTarget)
//     // const topOffset = document.querySelector(href).offsetHeight;
//     const topOffset = 0; // если не нужен отступ сверху 
//     const elementPosition = scrollTarget.getBoundingClientRect().top;
//     const offsetPosition = elementPosition - topOffset;

//     window.scrollBy({
//         top: offsetPosition,
//         behavior: 'smooth'
//     });
// }


function SmoothVerticalScrolling(e, time, where) {
    let el = document.getElementById(e);
    console.log(el)
    let eTop = el.getBoundingClientRect().top;
    let eAmt = eTop / 101;
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

let menuButtons = {
    'services': {
        id: 1,
        text: 'Условия',
        class: 'services'
    },
    'booking': {
        id: 2,
        text: 'Бронирование',
        class: 'booking'
    },
    'rules': {
        id: 3,
        text: 'Правила',
        class: 'rules'
    },
    'map': {
        id: 4,
        text: 'Адрес',
        class: 'map'
    }
}

let achievs = {
    'availability': {
        id: 1,
        title: 'Доступность',
        description: 'Удобная транспортная доступность и асфальтированная дорога сделает поездку в город быстрой и комфортной, позволяя совмещать преимущества городской инфраструктуры и спокойствия загородной жизни'
    },
    'safety': {
        id: 2,
        title: 'Безопасность',
        description: 'Современный дизайн интерьера и качественные строительные материалы обеспечат ваш комфорт и безопасность'
    },
    'space': {
        id: 3,
        title: 'Простор',
        description: 'Просторная территория с уютным садом подарит массу возможностей для семейного отдыха и активного досуга на свежем воздухе'
    },
    'zones': {
        id: 4,
        title: 'Зоны отдыха',
        description: 'На территории находятся несколько зон отдыха, которые сделают ваш отдых ещё более комфортным: мангальная зона, лобное место у костра для вечерних посиделок, <span class="text-daorange font-bold italic underline">баня из кедра на дровах с чаном из нержавеющей стали, вместительность которого 8 человек</span> и красивый ландшафт'
    },
}
</script>

<style scoped>
.stroke_text {
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: #D58637;
}
</style>
