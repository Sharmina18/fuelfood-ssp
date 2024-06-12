<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscriptions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="text-2xl">
                {{--create button--}}
                <a href="{{ route('subscriptions.create') }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Add Subscription</a>
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                {{--table--}}
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th>Subscription ID</th>
                        <th>Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Meal Preference</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($subscriptions as $subscription)
                        <tr>
                            <td class="border px-4 py-2">{{ $subscription->id }}</td>
                            <td class="border px-4 py-2">{{ $subscription->name }}</td>
                            <td class="border px-4 py-2">{{ $subscription->start_date }}</td>
                            <td class="border px-4 py-2">{{ $subscription->end_date }}</td>
                            <td class="border px-4 py-2">{{ $subscription->meal_preference }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('subscriptions.show', $subscription->id) }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">View</a>
                                <br><br>
                                <a href="{{ route('subscriptions.edit', $subscription->id) }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Edit</a>
                                <br><br>
                                <form action="{{ route('subscriptions.destroy', $subscription->id) }}" method="POST">
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
