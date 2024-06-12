<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('reservations.store') }}">
                    @csrf
                    <div class="px-10 py-10">
                    <div>
                        <x-label for="name" :value="__('Name')" class="block text-gray-700 text-sm font-bold mb-2" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-label for="phone" :value="__('Phone')" class="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="table_number" :value="__('Table Number')" class="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="table_number" class="block mt-1 w-full" type="text" name="table_number" value="" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="reservation_date" :value="__('Reservation Date')" class="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="reservation_date" class="block mt-1 w-full" type="date" name="reservation_date" value="" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="number_of_people" :value="__('Number of People')" class="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="number_of_people" class="block mt-1 w-full" type="number" name="number_of_people" value="" required />
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Create</button>
                    </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
