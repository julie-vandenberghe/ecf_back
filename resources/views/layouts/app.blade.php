<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body class="bg-gray-200">
    <nav class="bg-[#144284]">
        <div class="max-w-5xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="/" class="flex items-center space-x-3">
            <img src="/img/logo-fond-transparent.png" alt="Literie 3000" width="150">
          </a>
        <a href="/matelas" class="block py-2 px-3 text-white bg-gray-900 rounded-xl hover:bg-gray-700 duration-200">Liste des matelas</a>
        <a href="/matelas/nouveau" class="block py-2 px-3 text-white bg-gray-900 rounded-xl hover:bg-gray-700 duration-200">Ajouter un matelas</a>
    </nav>   


   

{{-- <body class="font-[Inter] bg-gray-200">
    <div class="bg-gray-800 shadow">
        <div class="max-w-6xl mx-auto px-3 py-8">
            <nav class="text-gray-100 space-x-4">
                <a href="/" class="text-lg"><img src="/img/logo-fond-transparent.png" alt="Literie 3000" width="250"></a>
                <a href="/matelas" class="text-lg">Matelas</a>
            </nav>
        </div>
    </div> 
    
    <div class="max-w-6xl mx-auto px-3 py-8">--}}

    <div class="max-w-screen-xl flex flex-col flex-wrap items-center justify-between mx-auto p-4">
        @yield('content')
    </div>
</body>
</html>
