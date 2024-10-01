<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- tag to connect to app.css file -->
        @vite('resources/css/app.css')

        <!-- tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- alpine.js -->
{{--        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>--}}

        <style>
            .scale-105 {
                transform: scale(1.05);
            }
        </style>

    </head>
    <body class="bg-somewhite">
        <!-- HEADER -->
        <header class="flex justify-between items-center p-6 pb-6 bg-somewhite font-khand text-xl">

            <a href="/">
                <img src="{{ asset('images/finallogo.png') }}" alt="Logo" class="mr-3 h-14 ">
            </a>

                <div class="flex justify-between items-center">

                    <div class="flex gap-6">
                        <a href="/menu" class="text-black text-xl hover:text-random2">Menu</a>
                        <a href="/contact" class="text-black text-xl hover:text-random2">Contact</a>
                        <a href="/about" class="text-black text-xl hover:text-random2">About</a>
                    </div>
                    <span class="rotate-90">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6 m-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                      </svg>
                    </span>


                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70  focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-random2 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-random2 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
                </div>
        </header>

        <section>

        <!-- MAIN IMAGE + TEXT -->
        <div class="grid grid-cols-2">

            <div x-data="{ hover: false }">

                <img
                    x-show="hover"
                    src="{{ asset('images/text1.png') }}"
                    alt="My Image"
                    class="absolute top-10 left-80 h-auto transition-transform duration-300 ease-in-out w-80"
                >

                <img
                    :class="{ 'scale-105': hover }"
                    src="{{ asset('images/img22.png') }}"
                    alt="My Image"
                    class="h-auto transition-transform duration-300 ease-in-out"
                    @mouseover="hover = true"
                    @mouseleave="hover = false"
                >

                <img
                    x-show="hover"
                    src="{{ asset('images/text2.png') }}"
                    alt="My Image"
                    class="absolute bottom-5 right-1/3 h-auto transition-transform duration-300 ease-in-out w-96"
                >

{{--                <div--}}
{{--                    x-show="hover"--}}
{{--                    class="absolute top-0 left-0 text-white bg-black bg-opacity-50 p-2"--}}
{{--                    style="display: none;" --}}
{{--                >--}}
{{--                Hi!--}}
{{--                </div>--}}

            </div>

            <div class="text-center font-khand font-semibold pt-56 pb-32 pr-44 text-black">
                <h1 class="text-8xl"><span class="text-9xl hover:text-somegreen">Food</span> made</h1>
                <h1 class="text-8xl">to <span class="text-9xl hover:text-somegreen">Fuel</span> you</h1>
                <br>
                <div class="flex flex-row justify-center gap-10">
                    <a href="/about" class="bg-somegreen text-3xl text-random px-6 py-2 rounded-md hover:bg-somegreen hover:text-black">View Menu</a>
                    <a href="/subs" class="bg-somegreen text-3xl text-random px-6 py-2 rounded-md hover:bg-somegreen hover:text-black">View Plans</a>
                </div>
            </div>
        </div>
        </section>

<br><br><br>

        <!-- ABOUT SECTION -->
        <section>
        <div class="grid grid-cols-2 px-14 pt-20 font-khand">
            <div>
                <br>
                <p class="p-6 text-2xl text-black"><span class="text-4xl">F</span>uel Food is a health and fitness based restaurant based in Colombo.
                    Our menu caters to various dietary needs and training programs,with convenient weekly or monthly subscription
                    plans tailored to your preferences. We make healthy eating easy and delicious, so you can focus on crushing
                    your workouts.</p>
                <div class="p-6">
                <a href="/about" class="bg-somegreen text-3xl font-bold text-random p-6 py-2 rounded-md hover:bg-somegreen hover:text-black">About Us</a>
                </div>
            </div>

            <div>
                <img src="{{ asset('images/aboutUs2.jpg') }}" alt="My Image" class="h-fit p-6">
            </div>
        </div>
        </section>

        <br><br><br><br><br><br><br>

        <!-- SUBSCRIPTIONS SECTION -->
        <section>
            <div class="">
                <h1 class="font-khand text-7xl text-center font-bold">Meal Subscriptions</h1>
                    <p class="font-khand text-2xl py-5 text-center pb-32">You can subscribe to weekly or monthly meal plans according to your fitness preference and
                        have healthy meals delivered to your doorstep!</p>

                <!-- SUBSCRIPTIONS GRID -->
                <!-- GRID 1 -->
                <div class="grid grid-cols-2 gap-4 px-16 mb-24">
                    <div class="mx-44">
                        <h2 class="text-2xl font-khand font-bold"><span class="text-5xl">1.</span> choose fitness</h2>
                        <h2 class="text-8xl font-khand font-bold text-somegreen">Goal</h2>
                        <p class="text-random2 text-lg font-bold">What's your weight journey goal? Gain, lose, or maintain?</p>
                    </div>

                    <div>
                        <img
                            src="{{ asset('images/arrow1.png') }}"
                            alt="My Image"
                            class="absolute w-60 h-auto right-1/3 mr-16 mt-16"
                        >
                    </div>
                </div>

                <!-- GRID 2 -->
                <div class="grid grid-cols-2 gap-4 px-16 mb-24">
                    <div>
                        <img
                            src="{{ asset('images/arrow2.png') }}"
                            alt="My Image"
                            class="absolute w-60 h-auto left-1/3 ml-12 mt-20"
                        >
                    </div>

                    <div class="mx-44">
                        <h2 class="text-2xl font-khand font-bold"><span class="text-5xl">2.</span> choose meal</h2>
                        <h2 class="text-8xl font-khand font-bold text-somegreen">Preference</h2>
                        <p class="text-random2 text-lg font-bold">We cater to all dietary needs. Vegan, vegetarian, pescatarian, gluten-free, allergies...anything!</p>
                    </div>
                </div>

                <!-- GRID 3 -->
                <div class="grid grid-cols-2 gap-4 px-16 mb-24">
                    <div class="mx-44">
                        <h2 class="text-2xl font-khand font-bold"><span class="text-5xl">3.</span> choose subscription</h2>
                        <h2 class="text-8xl font-khand font-bold text-somegreen">Period</h2>
                        <p class="text-random2 text-lg font-bold">Tailored to your schedule: weekly, monthly, or quarterly.</p>
                    </div>

                    <div>
                        <img
                            src="{{ asset('images/arrow1.png') }}"
                            alt="My Image"
                            class="absolute w-60 h-auto right-1/3 mr-16 mt-16"
                        >
                    </div>
                </div>

                <!-- GRID 4 -->
                <div class="grid grid-cols-2 gap-4 px-16 mb-24">
                    <div>
                    </div>

                    <div class="mx-44">
                        <h2 class="text-2xl font-khand font-bold"><span class="text-5xl">4.</span> have meals delivered to your</h2>
                        <h2 class="text-8xl font-khand font-bold text-somegreen">Home!</h2>
                    </div>
                </div>

            </div>

            <br>

            <div class="flex justify-center items-center m-auto gap-10"  x-data="{ hover: false }">
                <img
                    x-show="hover"
                    src="{{ asset('images/text3.png') }}"
                    alt="My Image"
                    class="absolute left-32 pb-10 mb-96 h-auto transition-transform duration-300 ease-in-out w-80"
                >

                <img
                    :class="{ 'scale-105': hover }"
                    src="{{ asset('images/pack.png') }}"
                    alt="My Image"
                    class="w-1/2 h-auto transition-transform duration-300 ease-in-out"
                    @mouseover="hover = true"
                    @mouseleave="hover = false"
                >

                <a href="/subs" class="bg-somegreen font-khand font-bold text-5xl text-random
                   px-8 py-4 rounded-md hover:bg-somegreen hover:text-black mt-5">Subscribe Now!</a>
            </div>

        </section>

        <br><br>

        <section class="pb-20">
        <!-- MENU SECTION -->
            <div class="flex flex-row px-16 pb-20">
                <div>
                <h1 class="font-khand font-bold text-black text-7xl w-1/3 pt-20">Our Menu</h1>
                </div>

                <div class="rotate-90">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-60 h-20 m-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h40" />
                    </svg>
                </span>
                </div>

                <div>
                <p class="font-khand text-2xl pt-32">Fuel Food offers delicious and nutritious meals designed to support all dietary needs.
                    Whether you're crushing a WOD, building muscle, or following a specific lifestyle plan,
                    we've got you covered.</p>
                </div>
            </div>

            <div class="grid grid-rows-2 px-16">
                <div class="grid grid-cols-3 gap-4">

                    <div class="group">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/muscleGain.jpg') }}" alt="My Image" class="object-cover">
                        <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100">
                            <button class=" font-khand font-bold text-3xl bg-black text-somegreen py-4 px-5">Muscle Gain Menu</button>
                        </div>
                    </div>
                    </div>

                    <div class="group">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('images/weightloss.jpg') }}" alt="My Image" class="object-cover">
                            <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100">
                                <button class=" font-khand font-bold text-3xl bg-black text-somegreen py-4 px-5">Weight Loss Menu</button>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('images/balance.jpg') }}"  alt="My Image" class="object-cover">
                            <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100">
                                <button class=" font-khand font-bold text-3xl bg-black text-somegreen py-4 px-5">Balance Menu</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-4 gap-4">
                    <div class="group">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('images/shake.jpg') }}"  alt="My Image" class="object-cover">
                            <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100">
                                <button class=" font-khand font-bold text-3xl bg-black text-somegreen py-4 px-5">Protein Shakes</button>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('images/snaccc.jpg') }}"  alt="My Image" class="object-cover">
                            <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100">
                                <button class=" font-khand font-bold text-3xl bg-black text-somegreen py-4 px-5">Snacks</button>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('images/coffee2.jpg') }}"  alt="My Image" class="object-cover">
                            <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100">
                                <button class=" font-khand font-bold text-3xl bg-black text-somegreen py-4 px-5">Beverages</button>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('images/muffins.jpg') }}"  alt="My Image" class="object-cover">
                            <div class="absolute h-full w-full bg-black/20 flex items-center justify-center -bottom-10 group-hover:bottom-0 opacity-0 group-hover:opacity-100">
                                <button class=" font-khand font-bold text-3xl bg-black text-somegreen py-4 px-5">Desserts</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <br><br>

    <footer class="bg-somegreen text-black font-khand pl-20">
        <div class="grid grid-cols-4 p-10">
            <div>
                <a href="/">
                    <img src="{{ asset('images/finallogo.png') }}" alt="Logo" class="mr-3 h-14">
                </a>
            </div>

            <div>
                <h2 class="text-3xl font-bold">Contact</h2>
                <br>
                <ul class="text-xl">
                    <li>(011) 123 1234</li>
                    <li>fuelfood@gmail.com</li>
                    <li>14, Cinnamon Gardens</li>
                </ul>
            </div>

            <div>
                <h2 class="text-3xl font-bold">Opening Hours</h2>
                <br>
                <ul class="text-xl">
                    <li>Monday to Sunday</li>
                    <li>6am - 10pm</li>
                </ul>
            </div>

            <div>
                <h2 class="text-3xl font-bold" >Quick Links</h2>
                <br>
                <ul>
                    <li><a href="/menu" class="text-black text-xl hover:text-random2">Home</a></li>
                    <li><a href="/contact" class="text-black text-xl hover:text-random2">My Account</a></li>
                    <li><a href="/about" class="text-black text-xl hover:text-random2">Menu</a></li>
                </ul>
            </div>
        </div>
    </footer>

    </body>
</html>
