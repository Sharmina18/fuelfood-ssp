<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                {{--create button--}}
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="text-2xl">
                <a href="{{ route('reservations.create') }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Create Reservation</a>
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                {{--table--}}
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th>Reservation ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Table No</th>
                            <th>Reservation Date</th>
                            <th>No of People</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <td class="border px-4 py-2">{{ $reservation->id }}</td>
                                <td class="border px-4 py-2">{{ $reservation->name }}</td>
                                <td class="border px-4 py-2">{{ $reservation->phone }}</td>
                                <td class="border px-4 py-2">{{ $reservation->table_number }}</td>
                                <td class="border px-4 py-2">{{ $reservation->reservation_date }}</td>
                                <td class="border px-4 py-2">{{ $reservation->number_of_people }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('reservations.show', $reservation->id) }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">View</a>
                                    <br><br>
                                    <a href="{{ route('reservations.edit', $reservation->id) }}" class="bg-black hover:bg-gray-800 text-somegreen font-bold py-2 px-4 rounded">Edit</a>
                                    <br><br>
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
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
