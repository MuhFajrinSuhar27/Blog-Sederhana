<?php

use App\Http\Controllers\PostDashboardController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});


Route::get('/posts', function () {
    $posts = Post::latest()->filter(request(['search', 'category', 'author']))->simplePaginate(16)->withQueryString();

    return view('posts', ['title' => 'Posts', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Route::get('/authors/{user}', function ( User $user) {
//     $count = $user->posts->count();
//     return view('posts', ['title' => $count . ' Arcticle by ' . $user->name , 'posts' => $user->posts]);
// });


// Route::get('/categories/{category:slug}', function ( Category $category) {
//     return view('posts', ['title' => 'Categories : ' . $category->name  , 'posts' => $category->posts]);
// });



Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', [PostDashboardController::class, 'showAll'])->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'verified'])->group(function () {
Route::get('/dashboard', [PostDashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/create', [PostDashboardController::class, 'create']);
Route::post('/dashboard', [PostDashboardController::class, 'store']);
Route::get('/dashboard/{post:slug}', [PostDashboardController::class, 'show']);
});

require __DIR__.'/auth.php';
