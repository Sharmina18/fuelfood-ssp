<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ($subscription->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <p class="text-lg">Name: {{ $subscription->name }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Meal Plan: {{ $subscription->meal_goal }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Dietary Restrictions: {{ $subscription->dietary_preference }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Duration: {{ $subscription->duration }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Address: {{ $subscription->address }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Created at: {{ $subscription->created_at }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Updated at: {{ $subscription->updated_at }}</p>
                    </div>
                    <div class="pt-5">
                        <a href="{{ route('subscriptions.index') }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

