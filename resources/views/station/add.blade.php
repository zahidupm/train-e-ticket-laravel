<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add new station') }}
            </h2>

            <a href="{{route('list-stations')}}" class="eticket-btn">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <AddTrain></AddTrain>
                    <form action="{{route('save-station')}}" method="post">
                        @csrf
                        <div class="flex -mx-4 mb-6">
                            <div class="flex-1 px-4">
                                <label for="name" class="eticket-label">Name</label>
                                <input type="text" class="eticket-input" id="name" name="name">
                            </div>

                            <div class="flex-1 px-4">
                                <label for="address" class="eticket-label">Address</label>
                                <input type="text" class="eticket-input" id="address" name="address">
                            </div>
                        </div>

                        <div class="flex -mx-4 mb-6">

                            <div class="flex-1 px-4">
                                <label for="lat" class="eticket-label">Latitude</label>
                                <input type="text" class="eticket-input" id="lat" name="lat">
                            </div>
                            <div class="flex-1 px-4">
                                <label for="lon" class="eticket-label">Longitude</label>
                                <input type="text" class="eticket-input" id="lon" name="lon">
                            </div>
                        </div>

                        <button type="submit" class="eticket-btn">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
