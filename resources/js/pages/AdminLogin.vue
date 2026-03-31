<template>
    <div class="w-[80%] xl:w-[60%] h-[100vh] m-auto flex flex-col items-center justify-center">
        <h1 class="text-[40px] text-center">
            Вход <br class="lg:hidden"> в админ-панель
        </h1>
        <form @submit.prevent="form.post('adminLogin', {preserveScroll: true})" class="w-full mt-10 flex flex-col gap-[3.8vw] min-[450px]:gap-[17.1px] min-[768px]:gap-[3vw] min-[820px]:gap-[24.6px] min-[1024px]:gap-[25px] xl:gap-4" >

            <input type="text" name="Логин" v-model="form.login" required  class=" w-full border-2  border-daorange text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px]  min-[1024px]:text-[20px] xl:text-[16px] text-center rounded-full py-[5%] min-[768px]:py-[4.4%] min-[1024px]:py-6 xl:py-5 px-4  outline-none placeholder:text-daorange" placeholder="Логин">
            <input type="text" name="Пароль" v-model="form.password" required  class=" w-full border-2 border-daorange text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px]  min-[1024px]:text-[20px] xl:text-[16px] text-center rounded-full py-[5%] min-[768px]:py-[4.4%] min-[1024px]:py-6 xl:py-5 px-4   outline-none placeholder:text-daorange" placeholder="Пароль">

            <button type="submit" class="font-semibold text-[4.8vw] min-[450px]:text-[21.6px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px]  min-[1024px]:text-[20px] xl:text-[18px] text-center px-[30px] py-[5%] min-[768px]:py-[4.9%] min-[1024px]:py-6 xl:py-6 bg-daorange rounded-full text-white">
                Войти
            </button>

        

            <div class="hidden md:block absolute w-max inset-x-0 m-auto px-[4%] xl:px-4 min-[1024px]:px-6  xl:-bottom-2.5 bg-[#F2F2F2] text-[3.9vw] min-[450px]:text-[17.55px] min-[1024px]:text-[16px] xl:text-[12px] text-daorange">БЕСПЛАТНАЯ ОТМЕНА БРОНИРОВАНИЯ ЗА 7 ДНЕЙ ДО ЗАСЕЛЕНИЯ</div>

    <div v-if="form.errors" class="text-red-500 text-sm mt-1">{{ form.errors.login }}</div>
    <div v-if="form.errors" class="text-red-500 text-sm mt-1">{{ form.errors.password }}</div>

        </form>
    </div>
    
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    login: '',
    password: ''
});
</script>