@extends('layouts.app')

@section('content')


    <h1 class="mb-4 text-4xl font-extrabold">Ajouter un nouveau matelas</h1>

    @foreach ($errors->all() as $error)
    <p class="text-red-500">{{ $error }}</p>
    @endforeach


    <form method="post">
        @csrf

       {{--  <div class="mb-3">
            <label for="name" class="block mb-1">Nom</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="rounded-lg">
        </div>

        @extends('layouts/app') 

        @section('content')  --}}
        
        
           {{--  <form action="" method="post" class="w-1/2 mx-auto" enctype="multipart/form-data">
                @csrf {{-- Anytime you define an HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request.
         --}}
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
                    <input name="brand" class="border-0 border-b focus:ring-0 w-full"  value="{{ old('brand') }}">
                </div>
                <div class="mb-4">
                    <label for="size" class="block">Taille *</label>
                    @error('size')
                        <div class="text-red-500">⚠️ {{ $message }}</div>
                    @enderror
                    <input name="size" class="border-0 border-b focus:ring-0 w-full"  value="{{ old('size') }}">
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
                    <input type="text" name="discount_price" class="border-0 border-b focus:ring-0 w-full"  value="{{ old('discount_price') }}">
                </div>
        
                <div class="container mx-0 min-w-full flex flex-col items-center">
                    <button class="mt-10 py-2 px-4 text-white bg-gray-700 rounded-xl hover:bg-gray-900 duration-200">Sauvegarder</button>
                </div>
           {{--  </form>
            
        @endsection --}}

       {{--  <button class="inline-block bg-gray-800 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-600 hover:scale-105 duration-200">Ajouter un matelas</button>
    --}} </form>
@endsection
