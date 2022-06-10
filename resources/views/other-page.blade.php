<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Other page</title>
</head>

<body>

    <main class="flex justify-center mx-auto text-center">
        <div>
            <h1 class="text-5xl">Ciao!</h1>
            <a href="{{route("home-page")}}">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Torna alla home page
                </button>
            </a>
            <a href="{{route("prodotti")}}">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                   Prodotti
                </button>
            </a>
        </div>
    </main>
</body>
</html>