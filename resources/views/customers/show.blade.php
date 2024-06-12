<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ($customer->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <p class="text-lg">Customer: {{ $customer->name }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Email: {{ $customer->email }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Phone: {{ $customer->phone }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Address: {{ $customer->address }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Date of Birth: {{ $customer->dob }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Created at: {{ $customer->meal_preference }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Dietary Restrictions: {{ $customer->dietary_restrictions }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Created at: {{ $customer->created_at }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Updated at: {{ $customer->updated_at }}</p>
                    </div>
                    <div class="pt-5">
                        <a href="{{ route('customers.index') }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
