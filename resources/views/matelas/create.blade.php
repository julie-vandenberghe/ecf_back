@extends('layouts.app')

@section('content')


    <h1 class="mb-4 text-4xl font-extrabold">Ajouter un nouveau matelas</h1>



    <form method="post">
        @csrf {{-- Anytime you define an HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request.--}}

                <div class="mb-4">
                    <label for="name" class="block">Titre *</label>
                    @error('name')
                        <div class="text-red-500">⚠️ {{ $message }}</div>
                    @enderror
                    <input type="text" name="name" id="title" value="{{ old('name') }}" class="border-0 border-b focus:ring-0 w-full" >
                </div>
                <div class="mb-4">
                    <label for="brand" class="block">Marque *</label>
                    @error('brand')
                        <div class="text-red-500">⚠️ {{ $message }}</div>
                    @enderror
                    <select name="brand" class="border-0 border-b focus:ring-0 w-full"> {{-- @todo : garder le champ renseigné en mémoire lorsqu'il y a un erreur dans le form --}}
                        <option value="">Choisir une marque :</option>
                        @foreach ($brand as $marque)
                            <option value="{{$marque}}">{{$marque}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="size" class="block">Taille *</label>
                    @error('size')
                        <div class="text-red-500">⚠️ {{ $message }}</div>
                    @enderror
                    <select name="size" class="border-0 border-b focus:ring-0 w-full">
                        <option value="">Choisir une taille :</option>
                        @foreach ($size as $taille)
                            <option value="{{$taille}}">{{$taille}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="image" class="block">Url de l'image *</label>
                    @error('image')
                        <div class="text-red-500">⚠️ {{ $message }}</div>
                    @enderror
                    <input type="text" name="image" class="border-0 border-b focus:ring-0 w-full"  value="{{ old('image') }}">
                </div>
                <div class="mb-4">
                    <label for="price" class="block">Prix *</label>
                    @error('price')
                        <div class="text-red-500">⚠️ {{ $message }}</div>
                    @enderror
                    <input type="text" name="price" class="border-0 border-b focus:ring-0 w-full"  value="{{ old('price') }}">
                </div>
                <div class="mb-4">
                    <label for="discount_price" class="block">Prix remisé</label>
                    @error('price')
                        <div class="text-red-500">⚠️ {{ $message }}</div>
                    @enderror
                    <input type="text" name="discount_price" class="border-0 border-b focus:ring-0 w-full"  value="">
                </div>
        
                <div class="flex flex-col items-center">
                    <button class="mt-10 py-2 px-4 text-white bg-gray-900 rounded-xl hover:bg-gray-700 duration-200">Sauvegarder</button>
                </div>
            </form>
@endsection
