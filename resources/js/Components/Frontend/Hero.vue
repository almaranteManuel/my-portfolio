<script setup>
</script>
<template>
    <section id="home"
        class="lg:h-[85vh] flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden">
        <div class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[22px]">Hey, I'm Manuel! 👋</p>
                    <h1
                        class="text-4xl leading-[44px] md:text-5xl md:leading-tight lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]">
                        Desarrollo con Laravel <br> Especializado en Backend.
                    </h1>
                    <p class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-left">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis minus, molestias perferendis
                        voluptatum maiores maxime nemo voluptas esse iusto!
                    </p>

                        <h5 class="text-lg flex items-center justify-center lg:justify-start text-black dark:text-white mb-2">
                            Follow me on
                        </h5>
                        <div class="flex items-center mb-6">
                            <a href="https://www.linkedin.com/in/almarantemanuel/" target="_blank"
                                class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-dark hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-secondary dark:hover:border-secondary mr-3 sm:mr-4">
                                <img src="http://127.0.0.1:8000/img/linked.png" alt="Linkedin Logo" width="30" height="30"
                                    viewBox="0 0 8 16" class="fill-current">
                            </a>
                            <a href="https://github.com/almaranteManuel" target="_blank"
                                class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-dark hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-secondary dark:hover:border-secondary mr-3 sm:mr-4">
                                <img src="http://127.0.0.1:8000/img/github.svg" alt="Linkedin Logo" width="30" height="30"
                                    viewBox="0 0 8 16" class="fill-current">
                            </a>
                            <a href="#" target="_blank"
                                class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-dark hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-secondary dark:hover:border-secondary mr-3 sm:mr-4">
                                <img src="http://127.0.0.1:8000/img/cv.png" alt="Linkedin Logo" width="30" height="30"
                                    viewBox="0 0 8 16" class="fill-current bg-white">
                            </a>
                        </div>

                </div>
                <div class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0">
                    <img class="rounded-lg" src="http://127.0.0.1:8000/img/hero.jpeg" alt="Picture profile">
                </div>
            </div>
        </div>
    </section>
</template>