<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="text-xl">
                        <a href="{{ route('customers.create') }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Add New Customer</a>
                    </div>
                </div>
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <thead>
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Phone</th>
                            <th class="px-4 py-2">Date of Birth</th>
                            <th class="px-4 py-2">Meal Preference</th>
                            <th class="px-4 py-2">Dietary Restrictions</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td class="border px-4 py-2">{{ $customer->id }}</td>
                                <td class="border px-4 py-2">{{ $customer->name }}</td>
                                <td class="border px-4 py-2">{{ $customer->email }}</td>
                                <td class="border px-4 py-2">{{ $customer->phone }}</td>
                                <td class="border px-4 py-2">{{ $customer->dob }}</td>
                                <td class="border px-4 py-2">{{ $customer->meal_preference }}</td>
                                <td class="border px-4 py-2">{{ $customer->dietary_restrictions }}</td>
                                <td class="border px-4 py-2">
                                    <div>
                                        <div class="py-0.5">
                                            <a href="{{ route('customers.show', $customer->id) }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-2 w-10 rounded">View</a>
                                            <br><br>
                                    <a href="{{ route('customers.edit', $customer->id) }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-2 w-10 rounded">Edit</a>
                                        </div>
                                        <br>
                                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded">Delete</button>
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
