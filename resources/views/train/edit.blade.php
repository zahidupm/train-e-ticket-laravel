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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4 relative">
                <div class="p-6 text-gray-900">

                    <form onsubmit="return confirm('Are you sure!')" action="{{route('delete-bogi', $bogi->id)}}" method="post" class="absolute right-5 top-5">
                        @csrf
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </form>

                   <h3 class="font-bold mb-3">Bogi: {{ $bogi->name }}</h3>

                    <div class="flex flex-wrap">
                        @foreach($bogi->seats as $seat)
                            <li class="w-32 {{$seat->booked ? 'bg-red-500' : 'bg-green-500'}} rounded mr-3 mb-3 font-bold bg-gray-100 relative p-4 text-center single-seat list-none">{{$seat->name}}</li>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
