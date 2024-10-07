<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscriptions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg overflow-hidden">

                <!-- Header Section -->
                <div class="p-6 sm:px-20 bg-gray-100 border-b border-gray-300">
                    <div class="flex justify-between items-center">
                        <h3 class="text-2xl font-semibold">Subscription Plans</h3>
                        <a href="{{ route('plans.create') }}" class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">
                            Add Subscription
                        </a>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <table class="min-w-full bg-white shadow rounded-lg overflow-hidden">
                        <thead>
                        <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                            <th class="px-6 py-3 text-left">Name</th>
                            <th class="px-6 py-3 text-left">Duration</th>
                            <th class="px-6 py-3 text-left">Price</th>
                            <th class="px-6 py-3 text-left">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        @forelse ($plans as $plan)
                            <tr class="border-b border-gray-300 hover:bg-gray-50 transition duration-200">
                                <td class="border px-6 py-4">{{ $plan->name }}</td>
                                <td class="border px-6 py-4">{{ $plan->duration }}</td>
                                <td class="border px-6 py-4">${{ number_format($plan->price, 2) }}</td>
                                <td class="border px-6 py-4 text-center">
                                    <div class="flex flex-col space-y-1">
                                        <a href="{{ route('plans.show', $plan->id) }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 rounded">
                                            View
                                        </a>
                                        <a href="{{ route('plans.edit', $plan->id) }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 rounded">
                                            Edit
                                        </a>
                                        <form action="{{ route('plans.destroy', $plan->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this subscription?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 rounded w-full">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4">No subscription plans available.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>


