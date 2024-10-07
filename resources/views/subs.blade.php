<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- tag to connect to app.css file -->
    @vite('resources/css/app.css')

    <!-- Styles
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
        -->

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.0/dist/cdn.min.js"></script>

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
            <a href="/subs" class="text-black text-xl hover:text-random2">Subscription</a>
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

<!-- MAIN CONTENT -->
<!-- Title -->
    <div class="text-center font-khand font-bold text-black pb-20">
        <h1 class="text-7xl">Subscriptions</h1>
    </div>

<!--How we work-->
<section>
    <h1 class="text-4xl font-khand font-semibold text-black pb-20 px-10">How we work:</h1>

    <div class="flex flex-row justify-center gap-52">
    <div class="w-64 flex flex-col justify-center items-center text-center">
        <img src="{{ asset('images/clipboard.png') }}" alt="Subscription" class="w-40 h-fit mb-5">
        <br>
        <h3 class="font-khand font-bold text-4xl">Curate your Meals</h3>
        <p class="font-khand text-random2 text-xl">Share your fitness goal, meal preferences, and desired subscription duration with us.</p>
    </div>

    <div class="w-64 flex flex-col justify-center items-center text-center">
        <img src="{{ asset('images/cooking.png') }}" alt="Subscription" class="w-40 h-fit mb-5">
        <br>
        <h3 class="font-khand font-bold text-4xl">Cooked for You</h3>
        <p class="font-khand text-random2 text-xl">Our chefs will handle all the prepping and cooking, customized perfectly to your needs.</p>
    </div>

    <div class="w-64 flex flex-col justify-center items-center text-center">
        <img src="{{ asset('images/oven.png') }}" alt="Subscription" class="w-40 h-fit mb-3">
        <br>
        <h3 class="font-khand font-bold text-4xl">Heat, Eat & Enjoy</h3>
        <p class="font-khand text-random2 text-xl">Our fitness meals come fully prepared—just heat and enjoy—so you can focus on other things.</p>
    </div>
    </div>
</section>

<br><br><br>

<!-- Pricing Chart -->
<section>
    <h1 class="text-4xl font-khand font-semibold text-black pb-20 px-10">Our Prices:</h1>

    <div class="flex flex-row justify-center gap-20 mx-10">
        <div class="w-96 flex flex-col justify-center items-center text-center bg-random3 p-10 rounded-3xl">
            <img src="{{ asset('images/muscles.png') }}" alt="Subscription" class="w-40 h-fit mb-5">
            <br>
            <h3 class="font-khand font-bold text-4xl">Muscle Gain</h3>
            <p class="font-khand text-random2 text-xl">Our Muscle Gain Meal Plan is designed to fuel your body with high-protein meals that support muscle recovery and growth.</p>
            <div class="font-khand font-bold text-xl">
            <p>1 week: $50</p>
            <p>2 weeks: $70</p>
            <p>1 month: $100</p>
            </div>
            <a href="#subsform" class="bg-somegreen text-2xl font-khand font-bold text-random px-6 py-2 mt-2 rounded-md hover:bg-somegreen hover:text-black">Get Now!</a>
        </div>

        <div class="w-96 flex flex-col justify-center items-center text-center bg-random3 p-10 rounded-3xl">
            <img src="{{ asset('images/weightloss.png') }}" alt="Subscription" class="w-40 h-fit mb-2">
            <br>
            <h3 class="font-khand font-bold text-4xl">Weight Loss</h3>
            <p class="font-khand text-random2 text-xl">Our Weight Loss Meal Plan offers low-calorie, nutrient-dense meals to help you shed pounds while staying satisfied. </p>
            <div class="font-khand font-bold text-xl">
                <p>1 week: $50</p>
                <p>2 weeks: $70</p>
                <p>1 month: $100</p>
            </div>
            <a href="#subsform" class="bg-somegreen text-2xl font-khand font-bold text-random px-6 py-2 mt-2 rounded-md hover:bg-somegreen hover:text-black">Get Now!</a>

        </div>

        <div class="w-96 flex flex-col justify-center items-center text-center bg-random3 p-10 rounded-3xl">
            <img src="{{ asset('images/balance.png') }}" alt="Subscription" class="w-40 h-fit mb-3">
            <br>
            <h3 class="font-khand font-bold text-4xl">Maintain</h3>
            <p class="font-khand text-random2 text-xl">Our Maintain Weight Meal Plan provides balanced meals designed to keep feeling energized while maintaining weight. </p>
            <div class="font-khand font-bold text-xl">
                <p>1 week: $50</p>
                <p>2 weeks: $70</p>
                <p>1 month: $100</p>
            </div>
            <a href="#subsform" class="bg-somegreen text-2xl font-khand font-bold text-random px-6 py-2 mt-2 rounded-md hover:bg-somegreen hover:text-black">Get Now!</a>

        </div>
    </div>
</section>

<br><br><br>

<!-- Subscription Form -->
<section id="subsform">
<h1 class="text-4xl font-khand font-semibold text-black pb-20 px-10">Join Now and Get Your Meals:</h1>

<div class="mx-auto max-w-4xl p-8 bg-random3 rounded-lg shadow-lg font-khand">
    <h2 class="text-center font-khand font-semibold text-gray-900 pb-5 text-3xl">Meal Plan Subscription</h2>

    <form method="POST" class="space-y-6" action="{{ route('subscriptions.store') }}">
        @csrf
        <!-- Name -->
        <div>
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" name="name" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700" placeholder="Enter your name">
        </div>

        <!-- Meal Plan -->
        <div>
            <label for="meal_goal" class="block text-gray-700 text-sm font-bold mb-2">Meal Plan</label>
            <select name="meal_goal" id="meal_goal" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700">
                <option value="muscle_gain">Muscle Gain</option>
                <option value="weight_loss">Weight Loss</option>
                <option value="maintain">Maintain</option>
            </select>
        </div>

        <!-- Dietary Restrictions -->
        <div>
            <label for="dietary_restrictions" class="block text-gray-700 text-sm font-bold mb-2">Dietary Restrictions</label>
            <input type="text" name="dietary_restrictions" id="dietary_restrictions" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700" placeholder="Enter any dietary restrictions">
        </div>

        <!-- Duration -->
        <div>
            <label for="duration" class="block text-gray-700 text-sm font-bold mb-2">Duration</label>
            <select name="duration" id="duration" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700">
                <option value="1_week">1 Week</option>
                <option value="2_weeks">2 Weeks</option>
                <option value="1_month">1 Month</option>
            </select>
        </div>

        <!-- Address -->
        <div>
            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
            <input type="text" name="address" id="address" class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700" placeholder="Enter your address">
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="submit" class="w-full sm:w-auto bg-random2 hover:text-black text-white font-bold py-3 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Get Started
            </button>
        </div>
    </form>
</div>
</section>

<br><br><br>

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
