@extends('layouts.app')

@section('content')

<h1 class="mb-4 text-4xl font-extrabold">{{ $title }}</h1>

    @if (session('message'))
        <p class="rounded shadow text-green-800 bg-green-300 text-center p-2 mb-9">
            {{ session('message') }}
        </p>
    @endif

    <div class="">
        {{-- le forelse pour gérer le message si le tableau est vide --}}
        @forelse ($matelas as $mattress)
            <div class="flex flex-wrap rounded-lg bg-white shadow-lg mb-6">
                <div class="w-1/3">
                    <a href="/matelas/{{ $mattress->id }}">
                        <img class="object-cover h-full rounded-l-lg" src="{{ $mattress->image }}" alt="{{ $mattress->name }}">
                    </a>
                </div>
                <div class="w-2/3 px-10 text-center">
                    <h2 class="text-2xl font-bold text-[#144284] pt-4 pb-4">{{ $mattress->name }}</h2>
                    <p class="mb-2">
                        <strong>Marque : </strong>{{ $mattress->brands->name ?? 'Aucune marque associée' }}
                    </p>
                    <p class="mb-2">
                        <strong>Taille : </strong>{{$mattress->size}}
                    </p>
                    
                    @if ($mattress->discount_price > 0) 
                        <p class="mb-2"><strong>Prix d'origine : </strong><span class="line-through">{{$mattress->price}} €</span></p>
                        <p class="mb-2"><strong>Prix remisé : </strong><span class="text-red-600">{{$mattress->discount_price}}  €</p>
                    @else
                    <p class="mb-2"><strong>Prix : </strong>{{$mattress->price}} €</p>       
                    @endif  
               
                <div class="flex justify-evenly gap-5 mt-10 pb-2">
                     <a href="/matelas/{{ $mattress->id }}/modifier" title="Modifier">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                         </svg> 
                     </a>
                     <a href="/matelas/{{ $mattress->id }}/supprimer" title="Supprimer">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                         </svg>
                     </a>
                 </div>
                
                </div>

            </div>
        @empty
            <div class="col-span-6">
                <h2 class="text-center text-2xl">Il n'y a pas de matelas.</h2>
            </div>
        @endforelse
    </div>
@endsection
