<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literie 3000</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body class="bg-gray-200">
    <header class="bg-[#144284] flex justify-between px-10 py-4 items-center">
            <p><a href="/"><img src="/img/logo-fond-transparent.png" alt="Literie 3000" width="250"></a></p>
        <nav class="flex gap-5">
            <a href="/matelas" class="block py-2 px-3 text-white bg-gray-900 rounded-xl hover:bg-gray-700 duration-200">Liste des matelas</a>
            <a href="/matelas/nouveau" class="block py-2 px-3 text-white bg-gray-900 rounded-xl hover:bg-gray-700 duration-200">Ajouter un matelas</a>
        </nav> 
    </header> 

    <div class="w-1/2 flex flex-col flex-wrap items-center justify-between mx-auto p-4">
        @yield('content')
    </div>
</body>
</html>
