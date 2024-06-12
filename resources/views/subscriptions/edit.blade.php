<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }} {{ $subscription->name }}{{ __('\'s Subscription')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="px-10 py-5">
                <form method="POST" action="{{ route('subscriptions.update', $subscription->id) }}">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-label for="name" :value="__('Name')" lass="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $subscription->name }}" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-label for="start_date" :value="__('Start Date')" lass="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" value="{{ $subscription->start_date }}" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="end_date" :value="__('End Date')" lass="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" value="{{ $subscription->end_date }}" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="meal_preference" :value="__('Meal Preference')" lass="block text-gray-700 text-sm font-bold mb-2"/>

                        <x-input id="meal_preference" class="block mt-1 w-full" type="text" name="meal_preference" value="{{ $subscription->meal_preference }}" required />
                    </div>

                    <div class="pt-5">
                        <button type="submit" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">
                            {{ __('Update Subscription') }}
                        </button>
                    </div>
                </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
