<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Subscription') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('subscriptions.store') }}">
                    @csrf

                    <div class="px-10">
                    <div class="mt-4">
                        <x-label for="name" :value="__('Name')" class="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="name" type="text" name="name" value="" required autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>

                    <!-- field for phone -->
                    <div class="mt-4">
                        <x-label for="phone" :value="__('Phone')" class="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" class="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="email" class="block mt-1 w-full" type="text" name="email" value="" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="start_date" :value="__('Start Date')" class="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" value="" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="end_date" :value="__('End Date')" class="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" value="" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="meal_preference" :value="__('Meal Preference')" class="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="meal_preference" class="block mt-1 w-full" type="text" name="meal_preference" value="" required />
                    </div>

                    <div class="py-10">
                        <button type="submit" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">
                            {{ __('Add Subscription') }}
                        </button>
                    </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
