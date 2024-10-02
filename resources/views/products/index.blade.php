<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg overflow-hidden">

                <!-- Header Section -->
                <div class="p-6 sm:px-20 bg-gray-100 border-b border-gray-300">
                    <div class="flex justify-between items-center">
                        <a href="{{ route('products.create') }}" class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">Add New Product</a>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <table class="min-w-full bg-white shadow rounded-lg overflow-hidden">
                        <thead>
                        <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                            <th class="px-6 py-3 text-left">ID</th>
                            <th class="px-6 py-3 text-left">Name</th>
                            <th class="px-6 py-3 text-left">Description</th>
                            <th class="px-6 py-3 text-left">Image</th>
                            <th class="px-6 py-3 text-left">Price</th>
                            <th class="px-6 py-3 text-left">Action</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        @foreach($products as $product)
                            <tr class="border-b border-gray-300 hover:bg-gray-50 transition duration-200">
                                <td class="border px-6 py-4">{{ $product->id }}</td>
                                <td class="border px-6 py-4">{{ $product->name }}</td>
                                <td class="border px-6 py-4">{{ $product->description }}</td>

                                <td class="border px-6 py-4">
                                    <img src="{{ $product->getFirstMediaUrl('featured') }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover">
                                </td>

                                <td class="border px-6 py-4">${{ number_format($product->price, 2) }}</td>
                                <td class="border px-6 py-4 text-center">
                                    <div class="flex flex-col space-y-1">
                                        <a href="{{ route('products.show', $product->id) }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 rounded">View</a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 rounded">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 rounded w-full">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
