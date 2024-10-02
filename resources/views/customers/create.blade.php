<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg overflow-hidden">

                <!-- Header Section -->
                <div class="p-6 sm:px-20 bg-gray-100 border-b border-gray-300">
                    <h2 class="text-2xl font-semibold">Add New Customer</h2>
                </div>

                <!-- Form Section -->
                <div class="p-6 sm:px-20 bg-white">
                    <form action="{{ route('customers.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                                <input type="text" name="address" id="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                                <input type="text" name="phone" id="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="dob" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth</label>
                                <input type="date" name="dob" id="dob" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="meal_preference" class="block text-gray-700 text-sm font-bold mb-2">Meal Preference</label>
                                <input type="text" name="meal_preference" id="meal_preference" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div class="mb-4">
                                <label for="dietary_restrictions" class="block text-gray-700 text-sm font-bold mb-2">Dietary Restrictions</label>
                                <input type="text" name="dietary_restrictions" id="dietary_restrictions" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                        <div class="mb-4 mt-6">
                            <button type="submit" class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">Add Customer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
