@extends('layouts.app')

@section('content')


    <h1 class="mb-4 text-4xl font-extrabold">Ajouter un nouveau matelas</h1>



    <form method="post" class="w-[300px]">
        @csrf {{-- Anytime you define an HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request.--}}

                <div class="mb-4">
                    <label for="name" class="block">Titre *</label>
                    @error('name')
                        <div class="text-red-500">⚠️ {{ $message }}</div>
                    @enderror
                    <input type="text" name="name" id="title" value="{{ old('name') }}" class="border-0 border-b focus:ring-0 w-full" >
                </div>
                <div class="mb-4">
                    <label for="brand_id" class="block">Marque *</label>
                    @error('brand_id')
                        <div class="text-red-500">⚠️ {{ $message }}</div>
                    @enderror
                    <select name="brand_id" class="border-0 border-b focus:ring-0 w-full"> 
                        <option value="">Choisir une marque :</option>
                        {{-- @foreach ($brand as $marque)
                            <option value="{{$marque}}" @if(old('brand') == $marque) selected @endif>{{$marque}}</option>
                        @endforeach --}}
                        @foreach ($brand as $marque)
                        <option value="{{$marque->id}}" @if(old('brand_id') == $marque->id) selected @endif>{{$marque->name}}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="size_id" class="block">Taille *</label>
                    @error('size_id')
                        <div class="text-red-500">⚠️ {{ $message }}</div>
                    @enderror
                    {{-- <select name="size_id" class="border-0 border-b focus:ring-0 w-full">
                        <option value="">Choisir une taille :</option>
                        @foreach ($size as $taille)
                            <option value="{{$taille->id}}" @if(old('size_id') == $taille->id) selected @endif>{{$taille->name}}</option>
                        @endforeach
                    </select> --}}
                    @foreach ($size as $taille)
                    <div class="flex items-center gap-2">
                        <input type="checkbox" name="sizes[]" id="size-{{ $taille->id }}" value="{{ $taille->id }}" @checked(in_array($taille->id, old('sizes', [])))>
                        <label for="size-{{ $taille->id }}">{{ $taille->name }}</label>
                    </div>
                    @endforeach
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
