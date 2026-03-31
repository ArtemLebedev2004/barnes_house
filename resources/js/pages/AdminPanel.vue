<template>
    <div class="md:flex flex-row-reverse min-[1024px]:justify-between max-w-[450px] min-[768px]:max-w-[820px] lg:max-w-[1030px] xl:max-w-[1280px] 2xl:max-w-[1400px] px-4.5 min-[768px]:px-[23px] min-[1024px]:px-[30px] xl:px-[47px] m-auto min-[768px]:mt-[5%] min-[820px]:mt-[41px] min-[1024px]:mt-[30px]">
      <h1 class="text-[30px] mt-3 font-bold">Заказы звонков</h1>

      <div class="
        flex flex-col gap-4
        mt-5
      ">
        <div v-for="(orderCall) in orderCalls" :key="orderCall" class="
          border-black border-2 rounded-2xl
          p-2 px-4 
          h-20
          flex flex-col justify-center
        ">
          <div class="text-[20px] font-bold">{{ orderCall.name }}</div>
          <div>{{ orderCall.phone }}</div>

        </div>
      </div>
      
    </div>
</template>

<script setup>
// import { useForm } from '@inertiajs/vue3';
import axios from '@/services/axios'
import { onMounted, reactive, ref } from 'vue';

let orderCalls = ref(null)

let fetchUsers = async() => {
  try {
    const response = await axios.get('/orderCalls')  // GET-запрос к API
    console.log(response)
    orderCalls.value = response.data               // Сохраняем данные
  } catch (err) {
    console.log(err) // Обрабатываем ошибку
  }
}

onMounted(async() => {
  await fetchUsers()
})

// const form = useForm({});
</script>