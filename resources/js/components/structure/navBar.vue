<template>
  <nav class="
    fixed z-20
    left-0 right-0 top-0
    text-white
    bg-liorange
  ">
    <div class="bg-liorange max-w-[450px] md:max-w-[820px] m-auto flex justify-between md:gap-[4vw] items-center px-4.5 md:px-[23px] py-4 " >
      <div class="w-[10%]">
        <router-link to="/">
            <img src="../../../assets/icons/main_logo.svg" alt="" >
        </router-link>
      </div>

      <div class="hidden lg:flex text-[18px] gap-14 xl:gap-20 text-black ">
        <div>
          <router-link to="/#services" v-scroll-to="'#services'" class="transition-all duration-75 hover:border-b-5 border-[#4F7A23] pb-2">Услуги</router-link>
        </div>

        <div class="">
          <router-link to="/#projects" v-scroll-to="'#projects'" class="transition-all duration-75 hover:border-b-5 border-[#4F7A23] pb-2">Проекты</router-link>
        </div>

        <div>
          <router-link to="/#about" v-scroll-to="'#about'" class="transition-all duration-75 hover:border-b-5 border-[#4F7A23] pb-2">О нас</router-link>
        </div>

        <div>
          <router-link to="/#contacts" v-scroll-to="'#contacts'" class="transition-all duration-75 hover:border-b-5 border-[#4F7A23] pb-2">Контакты</router-link>
        </div>
      </div>


      <a href="" class="
        min-w-[176px]
        w-[55%]
        p-1.25
        border-daorange border
        rounded-[4.2vw] min-[450px]:rounded-[18.9px]
      ">
        <div class="
            flex items-center justify-center
            font-semibold
            bg-daorange hover:bg-[#4F7A23]/0
            text-[4vw] min-[450px]:text-[18px] min-[768px]:text-[2vw] min-[820px]:text-[16.4px] text-center text-white hover:text-[#4F7A23]
            rounded-[2.8vw] min-[450px]:rounded-[12.6px]
            transition-all duration-200
            cursor-pointer
            px-3.5 md:px-5 py-1.5 md:py-2
        ">
          ЗАБРОНИРОВАТЬ
        </div>
      </a>

      <div class="hidden md:block font-black text-daorange text-center text-[1.7vw] min-[820px]:text-[13.94px]">
        Отдых для большой компании друзей
      </div>

      <div class="md:flex gap-[4vw] items-center">
        <div class="hidden md:flex gap-[2vw]">
            <div class="relative w-[13.5vw] min-[450px]:w-[60.75px] min-[768px]:w-[6vw] min-[820px]:w-[49.19px] h-[13.5vw] min-[450px]:h-[60.75px] min-[768px]:h-[6vw] min-[820px]:h-[49.19px] rounded-full bg-daorange flex items-center justify-center">
                <img src="../../../assets/icons/phone.svg" alt="" class="w-[45%]">
            </div>

            <div class="relative w-[13.5vw] min-[450px]:w-[60.75px] min-[768px]:w-[6vw] min-[820px]:w-[49.19px] h-[13.5vw] min-[450px]:h-[60.75px] min-[768px]:h-[6vw] min-[820px]:h-[49.19px] rounded-full bg-daorange flex items-center justify-center">
                <img src="../../../assets/icons/mail.svg" alt="" class="w-[50%]">
            </div>
        </div>

        <div @click="openMenu = !openMenu" class="w-[38px] lg:hidden">
            <svg v-if="!openMenu" width="38" height="26" viewBox="0 0 38 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="2" y1="24" x2="36" y2="24" stroke="#D58637" stroke-width="4" stroke-linecap="round"/>
                <line x1="2" y1="13" x2="36" y2="13" stroke="#D58637" stroke-width="4" stroke-linecap="round"/>
                <line x1="2" y1="2" x2="36" y2="2" stroke="#D58637" stroke-width="4" stroke-linecap="round"/>
            </svg>

            <svg v-if="openMenu" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 16L30 30M16 16L2 2M16 16L2 30M16 16L30 2" stroke="#D58637" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
      </div>


      <div class="
        lg:hidden
        absolute
        inset-0
        h-screen
        text-[15px] min-[768px]:text-[24px]
        gap-1 md:gap-2
        bg-liorange
        transition duration-500 ease-in-out
        -translate-x-full
        overflow-auto
        -z-1
      "
      :class="openMenu ? 'translate-x-0' : ''">
        <div class="
            m-auto
            max-w-[450px] min-[768px]:max-w-[550px]
            px-4.5
            min-[380px]:pb-4.5
        ">
            <div class="relative mt-[120px] min-[380px]:mt-[37%] text-liorange text-[19vw] min-[450px]:text-[85px] min-[768px]:text-[107px] font-black leading-[19vw] min-[450px]:leading-[85px] min-[768px]:leading-[90%] text-center">
                <div class="stroke_text ">
                    BARNES HOUSE
                </div>

                <div class="stroke_text absolute -z-1 top-[7px] left-[14px] text-transparent ">
                    BARNES HOUSE
                </div>
            </div>

            <div class="w-57.25 h-0.5 bg-daorange mt-[11.2%] m-auto">

            </div>

            <div class="flex flex-col gap-[6vw] min-[450px]:gap-[27px] justify-center items-center mt-[11.2%] text-sand uppercase text-[4vw] min-[450px]:text-[18px] min-[768px]:text-[2.5vw] min-[820px]:text-[20.5px] font-bold">
                <div>3D-экскурсия по дому</div>
                <div>Условия проживания</div>
                <div>Бронирование</div>
                <div>Наш адрес</div>
            </div>

            <div class="mt-[11.2%]">
                <a href="tel:89374541087" class="flex gap-[5vw] min-[450px]:gap-[18px] min-[768px]:gap-[32px] items-center">
                    <div class="relative w-[13.5vw] min-[450px]:w-[60.75px] min-[768px]:w-[82px] h-[13.5vw] min-[450px]:h-[60.75px] min-[768px]:h-[82px] rounded-full bg-daorange flex items-center justify-center">
                        <img src="../../../assets/icons/phone.svg" alt="" class="w-[40%]">
                    </div>

                    <div class="text-sand text-[5.5vw] min-[450px]:text-[24.75px] min-[768px]:text-[3.5vw] min-[820px]:text-[28.5px] font-bold">
                        <div>
                            +7-937-454-10-87
                        </div>

                        <div class=" h-[1px] bg-daorange">

                        </div>

                        <div class=" h-[1px] bg-daorange mt-[3px]">

                        </div>
                    </div>
                </a>

                <a href="mailto:Barneshause73@mail.ru" class="flex gap-[5vw] min-[450px]:gap-[18px] min-[768px]:gap-[32px] items-center mt-[5%] min-[380px]:mt-[7%]">
                    <div class="relative w-[13.5vw] min-[450px]:w-[60.75px] min-[768px]:w-[82px]  h-[13.5vw] min-[450px]:h-[60.75px] min-[768px]:h-[82px] rounded-full bg-daorange flex items-center justify-center">
                        <img src="../../../assets/icons/mail.svg" alt="" class="w-[50%]">
                    </div>

                    <div class="text-sand text-[5.5vw] min-[450px]:text-[24.75px] min-[768px]:text-[3.5vw] min-[820px]:text-[28.5px] font-bold">
                        <div>
                            Barneshause73@mail.ru
                        </div>

                        <div class="h-[1px] bg-daorange">

                        </div>

                        <div class="h-[1px] bg-daorange mt-[3px]">

                        </div>
                    </div>
                </a>
            </div>
        </div>




      </div>

    </div>
  </nav>

</template>

<script setup>
import { ref, watch } from 'vue';

// import router from '@/router';
// import { nextTick, onMounted, ref } from 'vue';

let openMenu = ref(false)

watch(openMenu, (newValue) => {
    if (newValue) {
        document.body.style.overflowY='hidden'
    } else {
        document.body.style.overflowY='auto'
    }
})

// let changeBgNav = ref(false)

// onMounted(() => {
//   const section = router.currentRoute.value.hash.replace("#", "")

//   if (section) {
//     nextTick(() => window?.document?.getElementById(section)?.scrollIntoView())
//   }

//   observeMainNav()
// })

// function observeMainNav() {
//   let observe_h1 = document.getElementsByTagName('h1')[0]

//   let rootMarginMain = null

//   if (observe_h1.offsetTop != 0) {
//     rootMarginMain = '-' + (observe_h1.clientHeight + observe_h1.offsetTop - 10) + 'px 0px 0px 0px'
//   } else {
//     rootMarginMain = '-' + (observe_h1.clientHeight + 90) + 'px 0px 0px 0px'
//   }

//   let observerBgNav = new IntersectionObserver((entries) => {
//   entries.forEach(entry => {
//     if (!entry.isIntersecting) {
//       changeBgNav.value = 50
//       console.log(rootMarginMain)
//     } else {
//       changeBgNav.value = 0
//     }
//   });
//   }, { rootMargin: rootMarginMain });

//   observerBgNav.observe(observe_h1);
// }
</script>

<style scoped>
.v-leave-from {
  width: 100%;
}
.v-leave-to {
  width: 0;
}

.stroke_text {
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: #D58637;
}
</style>
