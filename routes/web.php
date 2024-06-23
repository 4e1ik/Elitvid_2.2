<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('home');

Route::post('/sendForm', [MailController::class, 'send'])->name('send_mail');

Route::get('/decorations', [MainController::class, 'decorations'])->name('decorations');

Route::prefix('directions')->group(function () {
    Route::get('/', [MainController::class, 'directions'])->name('directions');

    Route::prefix('benches')->group(function () {
        Route::get('/', [MainController::class, 'benches'])->name('benches');


        Route::prefix('verona_benches')->group(function () {
            Route::get('/', [MainController::class, 'verona_benches'])->name('verona_benches');
            Route::get('/{id}', [MainController::class, 'show_bench_product'])->name('show_bench_product');
        });

        Route::prefix('verona_benches')->group(function () {
            Route::get('/', [MainController::class, 'verona_benches'])->name('verona_benches');
            Route::get('/{id}', [MainController::class, 'show_bench_product'])->name('show_bench_product');
        });

        Route::prefix('street_furniture_benches')->group(function () {
            Route::get('/', [MainController::class, 'street_furniture_benches'])->name('street_furniture_benches');
            Route::get('/{id}', [MainController::class, 'show_bench_product'])->name('show_bench_product');
        });

        Route::prefix('solo_benches')->group(function () {
            Route::get('/', [MainController::class, 'solo_benches'])->name('solo_benches');
            Route::get('/{id}', [MainController::class, 'show_bench_product'])->name('show_bench_product');
        });

        Route::prefix('lines_benches')->group(function () {
            Route::get('/', [MainController::class, 'lines_benches'])->name('lines_benches');
            Route::get('/{id}', [MainController::class, 'show_bench_product'])->name('show_bench_product');
        });

        Route::prefix('stones_benches')->group(function () {
            Route::get('/', [MainController::class, 'stones_benches'])->name('stones_benches');
            Route::get('/{id}', [MainController::class, 'show_bench_product'])->name('show_bench_product');
        });
    });

    Route::prefix('pots')->group(function () {
        Route::get('/', [MainController::class, 'pots'])->name('pots');


        Route::prefix('rectangular_pots')->group(function () {
            Route::get('/', [MainController::class, 'rectangular_pots'])->name('rectangular_pots');
            Route::get('/{id}', [MainController::class, 'show_pot_product'])->name('show_pot_product');
        });
        Route::prefix('square_pots')->group(function () {
            Route::get('/', [MainController::class, 'square_pots'])->name('square_pots');
            Route::get('/{id}', [MainController::class, 'show_pot_product'])->name('show_pot_product');
        });
        Route::prefix('round_pots')->group(function () {
            Route::get('/', [MainController::class, 'round_pots'])->name('round_pots');
            Route::get('/{id}', [MainController::class, 'show_pot_product'])->name('show_pot_product');
        });
    });
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/registration', [RegisterController::class, 'index'])->name('registration');
Route::post('/registration', [RegisterController::class, 'registration'])->name('save');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->where([])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/catalog', [AdminController::class, 'catalog'])->name('admin_catalog');
    Route::get('/benches', [AdminController::class, 'benches'])->name('admin_benches');
    Route::get('/pots', [AdminController::class, 'pots'])->name('admin_pots');
    Route::get('/texture', [AdminController::class, 'textures'])->name('admin_textures');
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('admin_gallery');

    Route::get('/create/{route}', [AdminController::class, 'create'])->name('create');

    // Кашпо
    Route::delete('/pot/images/{potImage}/{potProduct}/delete', [PotImageController::class, 'pot_image_destroy'])->name('pot_image_destroy');
    Route::put('/pot/images/{potImage}/{potProduct}/update', [PotImageController::class, 'pot_image_update'])->name('pot_image_update');

    // Кашпо
    Route::delete('/bench/images/{benchImage}/{benchProduct}/delete', [BenchImageController::class, 'bench_image_destroy'])->name('bench_image_destroy');
    Route::put('/bench/images/{benchImage}/{benchProduct}/update', [BenchImageController::class, 'bench_image_update'])->name('bench_image_update');

    Route::resources([
        'potProducts' => PotProductController::class,
        'benchProducts' => BenchProductController::class,
    ]);
});