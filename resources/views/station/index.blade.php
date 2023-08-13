<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Stations') }}
            </h2>

            <a href="{{route('add-station')}}">Add new station</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full table-auto">
                        <thead>
                        <tr>
                            <th class="border px-4 py-2 border-gray-200 text-left">Name</th>
                            <th class="border px-4 py-2 border-gray-200 text-left">Address</th>
                            <th class="border px-4 py-2 border-gray-200">Latitude</th>
                            <th class="border px-4 py-2 border-gray-200">Longitude</th>
                            <th class="border px-4 py-2 border-gray-200">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stations as $station)
                            <tr>
                                <td class="border px-4 py-2">{{ $station->name }}</td>
                                <td class="border px-4 py-2">{{ $station->address }}</td>
                                <td class="border px-4 py-2 text-center">{{ $station->lat }}</td>
                                <td class="border px-4 py-2 text-center">{{ $station->lon }}</td>
                                <td class="border px-4 py-2 text-center">
                                    <a href="">Edit</a>
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
