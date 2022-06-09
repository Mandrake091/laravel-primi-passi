<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>
</head>

<body class="bg-gray-900">
    <header>
        <div class="md:container mx-auto">
            <div class="columns-6  bg-orange-700 text-center">
                <div class="bg-yellow-700 tracking-wider">
                    <h1>Ciao!</h1>
                    <p>come stai?</p>
                </div>
                <div class="bg-red-700">
                    <h1>Ciao!</h1>
                    <p>come stai?</p>
                </div>
                <div class="bg-green-700 font-thin">
                    <h1>Ciao!</h1>
                    <p>come stai?</p>
                </div>
                <div class="bg-teal-700 font-bold">
                    <h1>Ciao!</h1>
                    <p>come stai?</p>
                </div>
                <div class="bg-blue-700">
                    <h1>Ciao!</h1>
                    <p>come stai?</p>
                </div>
                <div class="bg-violet-700">
                    <h1>Ciao!</h1>
                    <p>come stai?</p>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container flex-row mx-auto">
            <div class="columns-6 flex flex-wrap justify-around">
                <div class="text-center">
                    <img src="https://picsum.photos/200/300" alt="">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{route("other-page")}}">Premi</a>
                    </button>
                </div>
                <img src="https://picsum.photos/200/300" alt="">
                <img src="https://picsum.photos/200/300" alt="">
                <img src="https://picsum.photos/200/300" alt="">
                <img src="https://picsum.photos/200/300" alt="">
                <img src="https://picsum.photos/200/300" alt="">
                <img src="https://picsum.photos/200/300" alt="">
                <img src="https://picsum.photos/200/300" alt="">
                <img src="https://picsum.photos/200/300" alt="">
            </div>
        </div>
    </main>


</body>

</html>