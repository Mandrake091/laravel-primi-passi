<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>
</head>

<body class="bg-white dark:bg-slate-800 dark:text-white">
    <header class="sticky top-0 z-40 w-full backdrop-blur opacity-90 flex-none">
        <div class="">
            <div class="bg-orange-900 text-center flex columns-6 w-full justify-between">
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
            </div>
        </div>
    </header>
    <main class="font-sans">
        <div class="container flex-row mx-auto pt-4">
            <div class="text-center m-4">
                <a href="{{route("other-page")}}">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Premi
                    </button>
                </a>
            </div>
            <div class="columns-4 lg:columns-8 gap-8 gap-y-5 flex lg:block flex-wrap justify-around">
                <img class="hover:scale-105 ease-in duration-300 rounded" src="https://picsum.photos/200/300" alt="">
                <img class="hover:scale-105 ease-in duration-300 rounded" src="https://picsum.photos/200/300?random=1"
                    alt="">
                <img class="hover:scale-105 ease-in duration-300 rounded" src="https://picsum.photos/200/300?random=2"
                    alt="">
                <img class="hover:scale-105 ease-in duration-300 rounded gap-y-5"
                    src="https://picsum.photos/200/300?random=3" alt="">
                <img class="hover:scale-105 ease-in duration-300 rounded" src="https://picsum.photos/200/300?random=4"
                    alt="">
                <img class="hover:scale-105 ease-in duration-300 rounded" src="https://picsum.photos/200/300?random=5"
                    alt="">
                <img class="hover:scale-105 ease-in duration-300 rounded" src=" https://picsum.photos/200/300?random=6"
                    alt="">
                <img class="hover:scale-105 ease-in duration-300 rounded" src="https://picsum.photos/200/300?random=7"
                    alt="">
            </div>
        </div>
    </main>
</body>

</html>