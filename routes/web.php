<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CommentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/recipes', function () {
    return view('user.page.recipes.recipe');
})->name('recipes');
Route::get('/tips', function () {
    return view('user.page.tips.tips');
})->name('tips');
Route::get('/news', function () {
    return view('user.page.news.news');
})->name('news');
Route::get('/share', function () {
    return view('user.page.share.share');
})->name('share');



<<<<<<< HEAD
Route::middleware(['auth','verified'])->group(function () {
//admin
    Route::get('/dashboard/recipes/create',function(){ return view('admin.page.recipes.create'); })->name('create_recipes');

        Route::get('/dashboard',function(){ return view('admin.dashboard'); })->name('dashboard');
        Route::get('/adminprofile',function(){ return view('admin.admin_profile'); })->name('admin_profile');
        Route::get('/dashboard/recipes',function(){ return view('admin.page.recipes.index'); })->name('manage_recipes');
        Route::get('/dashboard/tips',function(){ return view('admin.page.tips.index'); })->name('manage_tips');

        Route::get('/dashboard/categories',function(){ return view('admin.page.categories.index'); })->name('manage_categories');
        Route::get('/dashboard/categories_properties',function(){ return view('admin.page.categories_properties.index'); })->name('manage_categories_properties');

        Route::get('/dashboard/news',function(){ return view('admin.page.news.index'); })->name('manage_news');
        Route::get('/dashboard/users',function(){ return view('admin.page.users.index'); })->name('manage_users');
        Route::get('/dashboard/comments',function(){ return view('admin.page.comments.index'); })->name('manage_comments');
        Route::get('/dashboard/feedbacks',function(){ return view('admin.page.feedbacks.index'); })->name('manage_feedbacks');


        Route::get('/dashboard/comming',function(){ return view('admin.page.comming_soon'); })->name('comming_soon_admin');
//user
Route::get('/favorites',function(){ return view('user.page.favorites.index'); })->name('favorites');
    });
=======
Route::middleware(['auth', 'verified', 'permission'])->prefix('admin')->group(function () {
    //admin
    Route::get('/dashboard/recipes/create', function () {
        return view('admin.page.recipes.create');
    })->name('create_recipes');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('adminprofile', function () {
        return view('admin.admin_profile');
    })->name('admin_profile');
    Route::get('/dashboard/recipes', function () {
        return view('admin.page.recipes.index');
    })->name('manage_recipes');
    Route::get('/dashboard/tips', function () {
        return view('admin.page.tips.index');
    })->name('manage_tips');

    Route::get('/dashboard/categories', function () {
        return view('admin.page.tips.index');
    })->name('manage_categories');
    Route::get('/dashboard/categories_properties', function () {
        return view('admin.page.tips.index');
    })->name('manage_categories_properties');

    Route::get('/dashboard/news', function () {
        return view('admin.page.news.index');
    })->name('manage_news');
    Route::get('/dashboard/users', function () {
        return view('admin.page.users.index');
    })->name('manage_users');
    Route::get('/dashboard/comments', function () {
        return view('admin.page.comments.index');
    })->name('manage_comments');
    Route::get('/dashboard/feedbacks', function () {
        return view('admin.page.feedbacks.index');
    })->name('manage_feedbacks');


    Route::get('/dashboard/comming', function () {
        return view('admin.page.comming_soon');
    })->name('comming_soon_admin');
    //user
    Route::get('/favorites', function () {
        return view('user.page.favorites.index');
    })->name('favorites');
});
>>>>>>> 6d22204579a8886ab5f1adb309ae264455280ab5




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< HEAD
require __DIR__.'/auth.php';





Route::resource('comments', CommentsController::class);
Route::post('/comments-{re}-{user}', [IndexController::class, 'comments'])->name('comments');








































=======
require __DIR__ . '/auth.php';
>>>>>>> 6d22204579a8886ab5f1adb309ae264455280ab5
