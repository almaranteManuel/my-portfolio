<script setup>
import { ref, onMounted } from 'vue';

if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  document.documentElement.classList.add('dark')
} else {
  document.documentElement.classList.remove('dark')
}


const showMobileMenu = ref('false');

const scrollBg = ref(false);

const navigations = [
  { name: 'Home', href: '#home' },
  { name: 'About', href: '#about' },
  { name: 'Projects', href: '#projects' },
  { name: 'Contact', href: '#contact' },
];

const setScrollBg = (value) => {
  scrollBg.value = value;
};

const toggleDark = ref(document.documentElement.className === "dark");

const changeDarkMode = () => {
  
  toggleDark.value = document.documentElement.classList.toggle("dark");
  toggleDark.value ? (localStorage.theme = "dark") : (localStorage.theme = "light");
  
};

onMounted(() => {
  window.addEventListener("scroll", () => {
    return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
  })
});

</script>

<template>
  <nav class="w-full fixed z-20  border-gray-200"
    :class="{ 'bg-light-primary dark:bg-dark-primary': scrollBg, 'bg-white dark:bg-slate-800': !scrollBg }">
    <div class="w-full flex flex-wrap items-center justify-between p-4">
      <a href="http://127.0.0.1:8000/" class="flex items-center">
        <img src="http://127.0.0.1:8000/img/maLogo.png" class="h-24 mr-3 rounded-full" alt="MA Logo" />
      </a>
      <button @click="showMobileMenu = !showMobileMenu" data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="w-full md:block md:w-auto" :class="{ hidden: showMobileMenu }" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 mt-4 border border-light-tail-500 dark:border-dark-navy-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:dark:bg-gray-900">
          <button class="text-light-tail-500 dark:text-dark-navy-200 hover:text-light-tail-100 dark:hover:text-white rounded-lg" @click="changeDarkMode()">
            <img src="http://127.0.0.1:8000/img/darkmode.png" alt="Modo" class=" block text-light-tail-500 dark:text-dark-navy-200 rounded hover:text-light-tail-100 dark:hover:text-white w-5 h-5" />
          </button>
          <li v-for="(navigation, index) in navigations" :key="index">
            <a :href="navigation.href"
              class="block py-2 pl-3 pr-4 text-light-tail-500 dark:text-dark-navy-200 rounded hover:text-light-tail-100 dark:hover:text-white"
              aria-current="page">
              {{ navigation.name }}
            </a>
          </li>
      </ul>
    </div>
  </div>
</nav>
</template>