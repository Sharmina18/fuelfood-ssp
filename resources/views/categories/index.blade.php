<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="text-2xl">
                        <a href="{{ route('categories.create') }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Add New Category</a>
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <thead>
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td class="border px-4 py-2">{{ $category->id }}</td>
                                <td class="border px-4 py-2">{{ $category->title }}</td>
                                <td class="border px-4 py-2">{{ $category->description }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('categories.show', $category->id) }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">View</a>
                                    <br><br>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Edit</a>
                                    <br>
                                    <br>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
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
