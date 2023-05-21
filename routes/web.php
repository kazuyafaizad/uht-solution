<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Middleware\isAdmin;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/learn-more', function () {
    return view('learn-more');
});

Route::get('/references', function () {
    return view('references');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/introduction', function () {
        return view('introduction');
    });

    Route::get('/sonoace-r7', function () {
        return view('sonoace-r7');
    });

    Route::get('/technical-part', function () {
        return view('technical-part');
    });
    Route::get('/quiz', [QuizController::class, 'index']);

    Route::get('/simulation', function () {
        return view('simulation');
    });

    Route::get('/how-to-use-ultrasound-sonoace-r7', function () {
        return view('how-to-use-ultrasound-sonoace-r7');
    });

    Route::get('/how-to-scan-bladder', function () {
        return view('how-to-scan-bladder');
    });
    Route::get('/how-to-scan-kidney', function () {
        return view('how-to-scan-kidney');
    });
    Route::get('/how-to-scan-liver-gallbladder-and-aorta', function () {
        return view('how-to-scan-liver-gallbladder-and-aorta');
    });
    Route::get('/how-to-get-three-dimension-image', function () {
        return view('how-to-get-three-dimension-image');
    });
});

Route::middleware(['auth', isAdmin::class])->group(
    function () {
        Route::get('/quiz/setting', [QuizController::class, 'setting']);
        Route::post('/quiz/store-form', [QuizController::class, 'store']);
        Route::get('/quiz/setting/edit/{quiz}', [QuizController::class, 'edit']);
        Route::post('/quiz/edit-form', [QuizController::class, 'update']);
        Route::post('/quiz/delete/{quiz}', [QuizController::class, 'delete']);
    }
);

require __DIR__ . '/auth.php';
