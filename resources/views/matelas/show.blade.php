@extends('layouts.app')

@section('content')
    <a href="/matelas" class="text-gray-500 flex gap-2 mb-3">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>Retour aux matelas
    </a>
    <div class="flex gap-10 items-center">
        <div class="w-2/5">
            <img class="w-full" src="{{ $matelas->image }}" alt="{{ $matelas->name }}">
        </div>
        <div class="w-3/5">
            <div class="border p-4 shadow-lg">
                <h1 class="text-3xl">{{ $matelas->name }}</h1>
                <p class="text-sm mt-1 text-gray-400">Mis en ligne le {{ $matelas->created_at->translatedFormat('d F Y') }} | {{ $matelas->created_at->diffForHumans()}}</p>
                <p class="text-sm">
                    {{-- @if ($logement->status)
                        <span class="bg-green-500">Logement actuellement disponible</span>
                    @else
                    <span class="bg-red-500">Logement actuellement indisponible</span>
                    @endif --}}
                </p>
                <div class="p-4">
                        @if ($matelas->discount_price > 0) 
                            <p class="line-through">{{$matelas->price}} €</p>
                            <p class="font-bold text-red-600">{{$matelas->discount_price}}  €</p>
                        @else
                        <p class="">{{$matelas->price}}   €</p>       
                        @endif  
                    <p class="">
                        <strong>Taille : </strong>{{$matelas->brand}}
                    </p>
                    <p class="">
                        <strong>Marque : </strong>{{$matelas->brand}}
                    </p>
                </div>
            </div>
                          
        </div>
    </div>
@endsection
