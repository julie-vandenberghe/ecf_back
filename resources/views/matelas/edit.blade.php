@extends('layouts.app')

@section('content')
    @foreach ($errors->all() as $error)
        <p class="text-red-500">{{ $error }}</p>
    @endforeach

    <form method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="block mb-1">Nom</label>
            <input type="text" name="name" id="name" value="{{ old('name', $matelas->name) }}" class="rounded-lg">
        </div>

       {{--  <div class="mb-3">
            <label for="content" class="block mb-1">Contenu</label>
            <textarea name="content" id="content" class="rounded-lg">{{ old('content', $game->content) }}</textarea>
        </div> --}}

        <div class="mb-3">
            <label for="image" class="block mb-1">Image</label>
            <input type="text" name="image" id="image" value="{{ old('image', $matelas->image) }}" class="rounded-lg">
        </div>

        {{-- <div class="mb-3 flex items-center gap-3 mb-1">
            <label for="active" class="block">Actif</label>
            <input type="checkbox" name="active" id="active" value="1" @checked(old('active', $game->active))>
        </div>

        <div class="mb-3">
            <label for="company" class="block mb-1">Éditeur</label>
            <input type="text" name="company" id="company" value="{{ old('company', $game->company) }}" class="rounded-lg">
        </div>

        <div class="mb-3">
            <label class="block mb-1">Genres</label>

            @foreach ($genres as $genre)
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="genres[]" id="genre-{{ $loop->index }}" value="{{ $genre }}" @checked(in_array($genre, old('genres', $game->genres->all())))>
                    <label for="genre-{{ $loop->index }}">{{ $genre }}</label>
                </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label class="block mb-1">Plateformes</label>

            @foreach ($platforms as $platform)
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="platforms[]" id="platform-{{ $platform->id }}" value="{{ $platform->id }}" @checked(in_array($platform->id, old('platforms', $game->platforms->pluck('id')->all())))>
                    <label for="platform-{{ $platform->id }}">{{ $platform->name }}</label>
                </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="released_at" class="block mb-1">Date de sortie</label>
            <input type="date" name="released_at" id="released_at" value="{{ old('released_at', $game->released_at->format('Y-m-d')) }}" class="rounded-lg">
        </div> --}}

        <button class="inline-block bg-gray-800 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-600 hover:scale-105 duration-200">Modifier {{ $matelas->name }}</button>
    </form>
@endsection
