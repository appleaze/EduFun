<?php  
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WritterController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/article/{article:slug}', [ArticleController::class, 'index'])->name('getArticle');

Route::controller(WritterController::class)->group(function(){
    Route::get('/writer', 'index')->name('writers');
    Route::get('/writer/{writer}', 'getWriterArticle')->name('getWriterArticle');
});

Route::get('/category/{category}', [CategoryController::class, 'index'])->name('category');

Route::get('/about', function () {
    return view('aboutus');
})->name('aboutus');
       