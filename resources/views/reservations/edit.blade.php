<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }} {{ $reservation->name }}{{ __('\'s Reservation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="px-10 py-5">
                    <form method="POST" action="{{ route('reservations.update', $reservation->id) }}">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-label for="name" :value="__('Name')" class="block text-gray-700 text-sm font-bold mb-2"/>

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $reservation->name }}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="phone" :value="__('Phone')" class="block text-gray-700 text-sm font-bold mb-2"/>

                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $reservation->phone }}" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="table_number" :value="__('Table Number')" class="block text-gray-700 text-sm font-bold mb-2"/>

                            <x-input id="table_number" class="block mt-1 w-full" type="text" name="table_number" value="{{ $reservation->table_number }}" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="reservation_date" :value="__('Reservation Date')" class="block text-gray-700 text-sm font-bold mb-2"/>

                            <x-input id="reservation_date" class="block mt-1 w-full" type="date" name="reservation_date" value="{{ $reservation->reservation_date }}" required />
                        </div>

                        <div class="mt-4">
                            <x-label for="number_of_people" :value="__('Number of People')" class="block text-gray-700 text-sm font-bold mb-2"/>

                            <x-input id="number_of_people" class="block mt-1 w-full" type="number" name="number_of_people" value="{{ $reservation->number_of_people }}" required />
                        </div>

                        <div class="flex items center justify-end mt-4">
                            <button type="submit" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">
                                {{ __('Update Reservation') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
