<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Metric Card 1-->
            <div class="h-60 bg-white rounded-lg shadow-lg p-5">
                <div class="flex flex-row justify-between">
                    <div>
                    <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M8 17.345a4.76 4.76 0 0 0 2.558 1.618c2.274.589 4.512-.446 4.999-2.31.487-1.866-1.273-3.9-3.546-4.49-2.273-.59-4.034-2.623-3.547-4.488.486-1.865 2.724-2.899 4.998-2.31.982.236 1.87.793 2.538 1.592m-3.879 12.171V21m0-18v2.2"/>
                    </svg>
                    </div>
                    <div class="flex flex-row items-center">
                        <h5 class="font-bold uppercase text-green-600">21%</h5>
                        <svg class="w-[26px] h-[26px] text-green-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M12 6v13m0-13 4 4m-4-4-4 4"/>
                        </svg>
                    </div>
                </div>
                <h4 class="pt-20 font-bold text-somegreen text-3xl">Total Revenue</h4>
                <h5 class="text-2xl font-bold">$3454</h5>
            </div>
            <!--/Metric Card 1-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Metric Card 2-->
            <div class="h-60 bg-white rounded-lg shadow-lg p-5">
                <div class="flex flex-row justify-between">
                    <div>
                        <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2.3" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                    </div>
                    <div class="flex flex-row items-center">
                        <h5 class="font-bold uppercase text-green-600">15%</h5>
                        <svg class="w-[26px] h-[26px] text-green-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M12 6v13m0-13 4 4m-4-4-4 4"/>
                        </svg>
                    </div>
                </div>
                <h4 class="pt-20 font-bold text-somegreen text-3xl">Total Customers</h4>
                <h5 class="text-2xl font-bold">534</h5>
            </div>
            <!--/Metric Card 2-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Metric Card 3-->
            <div class="h-60 bg-white rounded-lg shadow-lg p-5">
                <div class="flex flex-row justify-between">
                    <div>
                        <svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                        </svg>
                    </div>
                    <div class="flex flex-row items-center">
                        <h5 class="font-bold uppercase text-red-600">-4%</h5>
                        <svg class="w-[26px] h-[26px] text-red-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.3" d="M12 19V5m0 14-4-4m4 4 4-4"/>
                        </svg>
                    </div>
                </div>
                <h4 class="pt-20 font-bold text-somegreen text-3xl">Product Sales</h4>
                <h5 class="text-2xl font-bold">$454</h5>
            </div>
            <!--/Metric Card 3-->
        </div>
    </div>

    <!-- Chart -->
    <div class="flex flex-grow justify-items-center">
        <div class="flex-grow">
    <div x-data="app()" x-cloak class="px-4">
        <div class="max-w-lg mx-auto py-8">
            <div class="shadow p-6 rounded-lg bg-white">
                <div class="md:flex md:justify-between md:items-center">
                    <div>
                        <h2 class="text-xl text-gray-800 font-bold leading-tight">Total Sales</h2>
                        <p class="mb-2 text-gray-600 text-sm">Monthly Average</p>
                    </div>

                    <!-- Legends -->
                    <div class="mb-4">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-somegreen mr-2 rounded-full"></div>
                            <div class="text-sm text-gray-700">Sales</div>
                        </div>
                    </div>
                </div>

                <div class="line my-8 relative">
                    <!-- Tooltip -->
                    <template x-if="tooltipOpen == true">
                        <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block" :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`">
                            <div class="shadow-xs rounded-lg bg-white p-2">
                                <div class="flex items-center justify-between text-sm">
                                    <div>Sales:</div>
                                    <div class="font-bold ml-2">
                                        <span x-html="tooltipContent"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>

                    <!-- Bar Chart -->
                    <div class="flex -mx-2 items-end mb-2">
                        <template x-for="data in chartData">

                            <div class="px-2 w-1/6">
                                <div :style="`height: ${data}px`" class="transition ease-in duration-200 bg-somegreen hover:bg-random3 relative" @mouseenter="showTooltip($event); tooltipOpen = true" @mouseleave="hideTooltip($event)">
                                    <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                                </div>
                            </div>

                        </template>
                    </div>

                    <!-- Labels -->
                    <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
                    <div class="flex -mx-2 items-end">
                        <template x-for="data in labels">
                            <div class="px-2 w-1/6">
                                <div class="bg-red-600 relative">
                                    <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                                    <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                                </div>
                            </div>
                        </template>
                    </div>

                </div>
            </div>
        </div>
    </div>
        </div>

    <!-- Pie chart -->

    <div class=" w-fit pt-14">
{{--        <div class="">Pie chart</div>--}}
        <h2 class="text-xl text-gray-800 font-bold leading-tight">Popular Products</h2>
        <canvas class="p-1 ml-40 mr-40" id="chartPie"></canvas>
    </div>
    </div>

    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart pie -->
    <script>
        const dataPie = {
            labels: ["Protein Bars", "Oatmeal Cookies", "Muesli Bars"],
            datasets: [
                {
                    label: "My First Dataset",
                    data: [300, 50, 100],
                    backgroundColor: [
                        "#9db77a",
                        "#d7edbb",
                        "#738062",
                    ],
                    hoverOffset: 4,
                },
            ],
        };

        const configPie = {
            type: "pie",
            data: dataPie,
            options: {},
        };

        var chartBar = new Chart(document.getElementById("chartPie"), configPie);
    </script>

    <!-- Chart JS -->
    <script>
        function app() {
            return {
                chartData: [112, 10, 225, 134, 101, 80, 50, 100, 200],
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                tooltipContent: '',
                tooltipOpen: false,
                tooltipX: 0,
                tooltipY: 0,
                showTooltip(e) {
                    console.log(e);
                    this.tooltipContent = e.target.textContent
                    this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
                    this.tooltipY = e.target.clientHeight + e.target.clientWidth;
                },
                hideTooltip(e) {
                    this.tooltipContent = '';
                    this.tooltipOpen = false;
                    this.tooltipX = 0;
                    this.tooltipY = 0;
                }
            }
        }
    </script>

</x-app-layout>
