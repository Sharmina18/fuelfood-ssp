<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ($product->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div>
                        <p class="text-lg">Product: {{ $product->name }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Description: {{ $product->description }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Price: {{ $product->price }}</p>
                    </div>
                    <div class="mt-6">
                        <p class="text-lg">Category: {{ $product->category->title }}</p>
                    </div>
                    <div class="pt-5">
                        <a href="{{ route('products.index') }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
