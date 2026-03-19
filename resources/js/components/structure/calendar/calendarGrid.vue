<script setup>
    import { ref, computed, inject } from 'vue'

    const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    const {state, dispatch} = inject('store')
    const current = ref({
        currentDay: DAYS[new Date().getDay()],
        currentDate: new Date().getDate(),
        currentMonth: new Date().getMonth(),
        currentYear: new Date().getFullYear()
    })

    // Checking current month and year 👇🏻
    const isCurrentMonthAndYear = computed(() => (
        state.value.date.str.getMonth() === current.value.currentMonth &&
        state.value.date.str.getFullYear() === current.value.currentYear
    ))

    function range(start, end) {
        let ans = [];
        for (let i = start; i <= end; i++) {
            ans.push(i);
        }
        return ans;
    }
</script>
<template>
    <div class="calender-grid">
        <div class="days-grid">
            <div
                v-for="day, index in DAYS"
                :key="index"
                :class="['day', {today: day === current.currentDay && isCurrentMonthAndYear}]"
                :title="day"
            >{{ day[0] }}</div>
        </div>
        <div class="date-grid">
            <div class="date"
                v-for="date in state.dateGrid"
                :key="date.id"
            >
                <div
                    :class="['val', {today: date.dt === current.currentDate && isCurrentMonthAndYea}]"
                    v-if="date.dt">
                    {{ date.dt }}
                </div>
                <div v-else>&#10060;</div>
            </div>
        </div>
    </div>
</template>
<style scoped lang="less">
    .calender-grid{
        margin-top: 15px;
        display: grid;
        gap: 20px;
        user-select: none;
        .days-grid{
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            justify-content: space-between;
            align-items: center;
            .day{
                text-align: center;
                font-weight: bold;
                &.today{
                    color: blueviolet;
                }
            }
        }
        .date-grid{
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            justify-content: space-between;
            align-items: center;
            row-gap: 20px;
            .date{
                display: flex;
                justify-content: center;
                cursor: pointer;
                .val{
                    width: 20px;
                    height: 20px;
                    text-align: center;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 15px;
                    position: relative;
                    background-color: antiquewhite;
                    &.today{
                        color: blueviolet;
                        font-weight: bold;
                    }
                    &.event{
                        // border: 1px solid salmon;
                        background-color: antiquewhite;
                        font-weight: bold;
                        &::before{
                            content: '';
                            width: 5px;
                            height: 5px;
                            border-radius: 50%;
                            background-color: salmon;
                            position: absolute;
                            top: 2px;
                            right: 2px;
                        }
                    }
                }
            }
        }
    }
</style>
