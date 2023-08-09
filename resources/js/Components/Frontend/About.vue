<template>
    <section id="about" class="section bg-light-secondary dark:bg-dark-secondary">
        <div class="container mx-auto" v-motion :initial="{opacity: 0, y:100}" :visible="{opacity: 1, y:0}">
            <div class="flex flex-col xl:flex-row gap-24">
                <img src="http://127.0.0.1:8000/img/about.jpg" alt="about" class="object-cover h-full w-[350px] md:mx-auto lg:mx-0 rounded-2xl">
                <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
                    <div class="flex flex-col">
                        <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">
                            About me
                        </h2>
                        <p class="mb-4 text-accent">
                            Web fullstack developer with Laravel
                        </p>
                        <hr class="mb-8 opacity-100 dark:opacity-5">
                        <p class="mb-8">
                            I am currently studying a Bachelor's degree in Computer Science.
                            have experience programming new features for different sites.
                            Working mainly with technologies like Laravel for the Back-end, React and Bootstrap for the Front-end. 
                            To learn more about my work, i invite you to visit my linkedin, github and see my CV where i explain in more detail what i did and do.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>