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
                            <x-label for="name" :value="__('Name')" class="block text-gray-700 text-sm font-bold mb-2"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $subscription->name }}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="meal_goal" :value="__('Meal Plan')" class="block text-gray-700 text-sm font-bold mb-2"/>
                            <select id="meal_goal" name="meal_goal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="muscle_gain" {{ $subscription->meal_plan == 'muscle_gain' ? 'selected' : '' }}>Muscle Gain</option>
                                <option value="weight_loss" {{ $subscription->meal_plan == 'weight_loss' ? 'selected' : '' }}>Weight Loss</option>
                                <option value="maintain" {{ $subscription->meal_plan == 'maintain' ? 'selected' : '' }}>Maintain</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="dietary_preference" :value="__('Dietary Restrictions')" class="block text-gray-700 text-sm font-bold mb-2"/>
                            <x-input id="dietary_preference" class="block mt-1 w-full" type="text" name="dietary_preference" value="{{ $subscription->dietary_restrictions }}" />
                        </div>

                        <div class="mt-4">
                            <x-label for="duration" :value="__('Duration')" class="block text-gray-700 text-sm font-bold mb-2"/>
                            <select id="duration" name="duration" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="1_week" {{ $subscription->duration == '1_week' ? 'selected' : '' }}>1 Week</option>
                                <option value="2_weeks" {{ $subscription->duration == '2_weeks' ? 'selected' : '' }}>2 Weeks</option>
                                <option value="1_month" {{ $subscription->duration == '1_month' ? 'selected' : '' }}>1 Month</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="address" :value="__('Address')" class="block text-gray-700 text-sm font-bold mb-2"/>
                            <x-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ $subscription->address }}" required />
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

