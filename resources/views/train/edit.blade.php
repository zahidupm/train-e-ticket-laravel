<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Train') }} {{$train->name}}
            </h2>

            <a href="{{route('trains')}}">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($train->bogis as $bogi)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 text-gray-900">
                   {{ $bogi->name }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
