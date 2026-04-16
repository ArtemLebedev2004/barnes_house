<template>
    <div class=" min-[1024px]:justify-between max-w-[450px] min-[768px]:max-w-[820px] lg:max-w-[1030px] xl:max-w-[1280px] 2xl:max-w-[1400px] px-4.5 min-[768px]:px-[23px] min-[1024px]:px-[30px] xl:px-[47px] m-auto min-[768px]:mt-[5%] min-[820px]:mt-[41px] min-[1024px]:mt-[30px]">
      <div>
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
              <div class="w-full flex justify-between">
                <div class="text-[20px] font-bold">{{ orderCall.phone }}</div>
                <div @click="deleteOrderCall(orderCall.id)">УДАЛИТЬ</div>
              </div>

              <div class="">{{ orderCall.name }}</div>
              <div class="">{{ orderCall.date }}</div>
              
            </div>
          </div>
      </div>

      <div>
        <div class="md:flex gap-10 items-center mt-15 ">
          <h1 class="text-[30px] font-bold">Бронирования</h1>
          <a href="/#booking" class="block text-[20px] mt-3 md:mt-0">ДОБАВИТЬ</a>
        </div>
        
        <div class="
          flex flex-col gap-4
          mt-5
        ">
            <div v-for="(booking) in bookings" :key="booking" class="
              border-black border-2 rounded-2xl
              p-2 px-4 
              h-40
              flex flex-col justify-center
            ">
              <div class="w-full flex justify-between">
                <div class="text-[20px] font-bold">{{ booking.date }}</div>
                <div @click="deleteBooking(booking.id)">УДАЛИТЬ</div>
              </div>
              <div>{{ booking.phone }}</div>
              <div>{{ booking.name }}</div>
              <div>{{ booking.sauna ? 'Баня: да' : 'Баня: нет'}}</div>
              <div>{{ booking.vat ? 'Чан: да' : 'Чан: нет'}}</div>
            </div>
          </div>
      </div>
      
      
    </div>
</template>

<script setup>
// import { useForm } from '@inertiajs/vue3';
import axios from '@/services/axios'
import { useForm } from '@inertiajs/vue3';
import { onMounted, reactive, ref } from 'vue';

let orderCalls = ref(null)
let bookings = ref(null)

let fetchUsers = async() => {
  try {
    const response = await axios.get('/orderCalls')  // GET-запрос к API
    console.log(response)
    orderCalls.value = response.data               // Сохраняем данные

    const response2 = await axios.get('/booking')  // GET-запрос к API
    console.log(response2)
    bookings.value = response2.data

      for (let index1 = 0; index1 < bookings.value.length - 1; index1++) {
        for (let index2 = 0; index2 < bookings.value.length - index1 - 1; index2++) {
          if ((parseInt(bookings.value[index2].date[3] + bookings.value[index2].date[4], 10) > parseInt(bookings.value[index2+1].date[3] + bookings.value[index2+1].date[4], 10))) {
            let changeValue = bookings.value[index2]
            bookings.value[index2] = bookings.value[index2 + 1]
            bookings.value[index2 + 1] = changeValue
           
          } else if ((parseInt(bookings.value[index2].date[3] + bookings.value[index2].date[4], 10) == parseInt(bookings.value[index2+1].date[3] + bookings.value[index2+1].date[4], 10)) && (parseInt(bookings.value[index2].date[0] + bookings.value[index2].date[1], 10) > parseInt(bookings.value[index2+1].date[0] + bookings.value[index2+1].date[1], 10))) {
            // console.log(parseInt(bookings.value[index1].date[3] + bookings.value[index1].date[4], 10))
            let changeValue = bookings.value[index2]
            bookings.value[index2] = bookings.value[index2 + 1]
            bookings.value[index2 + 1] = changeValue
          }
        }
      }
    
  } catch (err) {
    console.log(err) // Обрабатываем ошибку
  }
}

const form = useForm({});
const deleteOrderCall = (id) => {
    form.delete(`orderCalls/${id}`);
    fetchUsers()
};

const deleteBooking = (id) => {
    form.delete(`booking/${id}`);
    fetchUsers()
};

onMounted(async() => {
  await fetchUsers()
})

// const form = useForm({});
</script>