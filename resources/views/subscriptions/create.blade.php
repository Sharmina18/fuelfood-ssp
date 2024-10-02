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

                        <!-- New Meal Plan Dropdown -->
                        <div class="mt-4">
                            <x-label for="meal_goal" :value="__('Choose Meal Plan')" class="block text-gray-700 text-sm font-bold mb-2"/>
                            <select id="meal_goal" name="meal_goal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="muscle_gain">Muscle Gain</option>
                                <option value="weight_loss">Weight Loss</option>
                                <option value="maintain">Maintain</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="dietary_preference" :value="__('Dietary Restrictions')" class="block text-gray-700 text-sm font-bold mb-2"/>
                            <input id="dietary_preference" type="text" name="dietary_preference" value="" autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                        </div>

                        <!-- New Duration Dropdown -->
                        <div class="mt-4">
                            <x-label for="duration" :value="__('Choose Duration')" class="block text-gray-700 text-sm font-bold mb-2"/>
                            <select id="duration" name="duration" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="1_week">1 Week</option>
                                <option value="2_weeks">2 Weeks</option>
                                <option value="1_month">1 Month</option>
                            </select>
                        </div>

                        <!-- New Address Field -->
                        <div class="mt-4">
                            <x-label for="address" :value="__('Address')" class="block text-gray-700 text-sm font-bold mb-2"/>
                            <x-input id="address" type="text" name="address" value="" required autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
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
