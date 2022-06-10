<script src="https://cdn.tailwindcss.com"></script>

<?php use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        $images = [
            'images' => 
            [
                'https://picsum.photos/200/300?random=1',
                'https://picsum.photos/200/300?random=2',
                'https://picsum.photos/200/300?random=3',
                'https://picsum.photos/200/300?random=4',
                'https://picsum.photos/200/300?random=5',
                'https://picsum.photos/200/300?random=6',
                'https://picsum.photos/200/300?random=7',
                'https://picsum.photos/200/300?random=8'
            ],
        ];
        return view('home-page', $images);
    }
)->name('home-page');

Route::get('/other-page', function () {
        return view('other-page');
    }
)->name('other-page');

Route::get('/prodotti', function () {
        return view('prodotti.prodotti');
    }
)->name('prodotti');