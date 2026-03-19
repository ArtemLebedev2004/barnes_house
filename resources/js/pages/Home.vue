<template>
    <header id="">
        <navBar />
    </header>

    <section id="main">
        <mainSection />
    </section>

    <section id="services">
        <servicesLivingSection />
    </section>

    <section id="booking">
        <bookingSection />
    </section>

    <section id="rules">
        <rulesSection />
    </section>

    <section id="map">
        <mapSection />
    </section>

    <section id="nowords">
        <nowordsSection />
    </section>

    <footer>
        <footerSection />
    </footer>

  <!-- <section id="services">
    <servicesSection />
  </section> -->

  <!-- <section id="projects">
    <projectsSection />
  </section>



  <section id="about">
    <aboutSection @id-active="idActiveEmit" />
  </section>

  <footer id="contacts">
    <footerContacts :idActive="idActive" />
  </footer> -->
</template>

<script setup>
 import navBar from '@/components/structure/navBar.vue';
import mainSection from '@/components/sections/HomeSections/mainSection.vue';
import servicesLivingSection from '@/components/sections/HomeSections/ServicesLivingSection.vue';
import bookingSection from '@/components/sections/HomeSections/bookingSection.vue';
import mapSection from '@/components/sections/HomeSections/mapSection.vue';
import rulesSection from '@/components/sections/HomeSections/rulesSection.vue';
import nowordsSection from '@/components/sections/HomeSections/nowordsSection.vue';
import footerSection from '@/components/structure/footerSection.vue';

// import projectsSection from '../components/sections/HomeViewSections/projectsSection.vue';
// import servicesSection from '../components/sections/HomeViewSections/servicesSection.vue';
// import aboutSection from '../components/sections/HomeViewSections/aboutSection.vue';
// import navBar from '@/components/structure/navBar.vue';
// import footerContacts from '@/components/structure/footerContacts.vue';
// import { ref } from 'vue';

// let idActive = ref(null)

// let idActiveEmit = (data) => {
//   idActive.value = data
// }
</script>

<style>
#main:before, #projects:before, #services:before, #about:before {
	display: block;
	content: "";
	height: 55px;
	margin: -55px 0 0;
}
</style>
