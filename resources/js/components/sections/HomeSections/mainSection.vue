<template>
    <swiper
        :menuButtons="menuButtons"
    />
    <div class="md:flex flex-row-reverse max-w-[450px] md:max-w-[820px] px-4.5 md:px-[23px] m-auto md:mt-[5%]">
        <div class="md:hidden relative mt-[9.8%] text-white text-[19vw] min-[450px]:text-[85px] font-black leading-[100%] min-[450px]:leading-[85px] text-center">
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

        <div class="md:w-[43%] relative border-daorange border-3 p-[3.5%] md:p-[1.65%] rounded-[12.3vw] min-[450px]:rounded-[55.35px] md:rounded-[6vw] mt-[9.4%] md:mt-0">
            <div class="relative">
                <img src="../../../../assets/img/main_img.jpg" alt="" class="rounded-[9.2vw] min-[450px]:rounded-[41.4px] md:rounded-[4.3vw]  pointer-events-none">

                <div class="absolute flex gap-[9px] right-[7%] top-[6%]">
                    <div class="bg-white text-[4.5vw] min-[450px]:text-[20px] md:text-[2.2vw] px-5 flex items-center rounded-full">
                        Консультация
                    </div>

                    <a href="tel:89374541087" class="block relative w-[12vw] min-[450px]:w-[53.5px] md:w-[6vw] h-[12vw]  min-[450px]:h-[53.5px] md:h-[6vw] rounded-full bg-daorange flex items-center justify-center">
                        <img src="../../../../assets/icons/phone.svg" alt="" class="w-[40%]">
                    </a>

                </div>

                <div class="absolute inset-x-0 top-[72.5%] bottom-0 rounded-b-[9.2vw] md:rounded-b-[4.3vw] min-[450px]:rounded-b-[41.4px] bg-linear-to-t from-black/65 from-53% ">
                    <div class="flex flex-col gap-[1vw] min-[450px]:gap-[4.5px] absolute left-[8%] md:left-[6%] bottom-[20%] md:bottom-[22%] leading-[7vw] min-[450px]:leading-[31px] md:leading-[120%] text-white text-[6.5vw] min-[450px]:text-[29px] md:text-[3vw]">
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

        <div class="md:w-[57%] relative text-[10vw] min-[450px]:text-[45px] md:text-[5.5vw] mt-[9.5%] md:mt-0 pt-[16.7%] md:pt-[10%] md:pr-[4.8%]">
            <div class="absolute font-bold italic text-white bg-daorange rounded-r-[4.5vw] min-[450px]:rounded-r-[20.25px] min-[450px]:rounded-l-[20.25px] md:rounded-l-none -left-[6%] min-[450px]:left-0 md:-left-[6%] top-1 md:top-2 w-[55%] md:w-[53%] h-[12.5%] md:h-auto md:py-[0.8%] pl-[18px] md:pl-[23px] -z-1 flex items-center">
                Новый
            </div>

            <div class="font-medium">
                загородный дом
            </div>

            <div class="hidden md:block mt-[4%]">
                <img src="../../../../assets/img/barnes_house_md.svg" alt="">
            </div>

            <div class="relative text-[4.5vw] min-[450px]:text-[20.25px] md:text-[2.25vw] font-light mt-[5%] md:mt-[1.5%]">
                Barnes House - это уютная территория с красивым и современным домом со всеми удобствами, <span class="font-black italic text-daorange">БАНЕЙ ИЗ КЕДРА С ЧАНОМ</span> и мангальной зоной для отдыха в кругу семьи или в компании друзей.

                <div class="absolute top-[14%] bg-daorange w-[31vw] min-[450px]:w-[139.5px] h-px">
                </div>
            </div>

            <div class="md:hidden  text-[7vw] min-[450px]:text-[31.5px] md:text-[2.35vw] mt-[8%] md:mt-[6%] border-daorange border-2 rounded-[10.7vw] min-[450px]:rounded-[48.15px] p-[2.8%] md:p-[1.5%] text-center">
                <div class="px-[31px] md:px-[13px] py-[3.6%] bg-daorange text-white rounded-full">
                    Забронировать
                </div>

                <div class="px-[31px] md:px-[13px] py-[3.3%] bg-white rounded-full">
                    Посмотреть дом
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-[820px] px-[23px] m-auto mt-[4%]">
        <div class="hidden md:flex  text-[4vw] border-daorange border-2 rounded-full  p-[1.5%] text-center">
            <div class="w-[50%] px-[20px] py-[2.6%] bg-daorange text-white rounded-full">
                Забронировать
            </div>

            <div class="w-[50%] px-[31px] md:px-[13px] py-[2.6%] bg-white rounded-full">
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

let menuButtons = {
    '3d': {
        id: 1,
        text: '3D-экскурсия'
    },
    'living': {
        id: 2,
        text: 'Проживание'
    },
    'booking': {
        id: 3,
        text: 'Бронирование'
    },
    'adress': {
        id: 4,
        text: 'Адрес'
    }
}

let achievs = {
    'availability': {
        id: 1,
        title: 'Доступность',
        description: 'Удобная транспортная доступность сделает поездку в город быстрой и комфортной, позволяя совмещать преимущества городской инфраструктуры и спокойствия загородной жизни'
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
        description: 'На территории находятся несколько зон отдыха,, которые сделают ваш отдых ещё более комфортным: мангальная зона, <span class="text-daorange font-bold italic underline">баня из кедра с чаном</span> и красивый ландшафт'
    },
}
</script>

<style scoped>
.stroke_text {
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: #D58637;
}
</style>
