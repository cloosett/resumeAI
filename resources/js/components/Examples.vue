<template>
    <swiper
        :slides-per-view="3"
        :space-between="35"
        :breakpoints="breakpoints"
        :navigation="true"
    >
        <swiper-slide>
            <img :src="`/image/example2.jpg`" alt="ex2">
        </swiper-slide>
        <swiper-slide>
            <img :src="`/image/example5.jpg`" alt="ex2">
        </swiper-slide>
        <swiper-slide>
            <img :src="`/image/example4.jpg`" alt="ex2">
        </swiper-slide>
        <swiper-slide>
            <img :src="`/image/exapmle3.jpg`" alt="ex1">
        </swiper-slide>
        <swiper-slide>
            <img :src="`/image/example1.jpg`" alt="ex2">
        </swiper-slide>
    </swiper>
</template>
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    data() {
        return {
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                },
                320: {
                    slidesPerView: 3,
                },
            },
        };
    },
};
</script>
