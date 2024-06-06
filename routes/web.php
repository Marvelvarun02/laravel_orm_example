<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;





// Route::get('/test', function () {
//     $users = User::with('posts.comments')->get();
//     return view('test', compact('users'));
// });
// routes/web.php


// Route::get('/test', function () {
//     $users = User::with('posts.comments')->get();
    
//     return view('test', compact('users'));
// });

// routes/web.php
use App\Http\Controllers\UserController;

Route::get('/test', function () {
    // Eager load relationships
    $users = User::with(['posts.comments', 'posts.tags', 'posts.category', 'roles'])->get();
    // dd("posts.category");
    // dd($users->toArray());
    return view('test', compact('users'));
});




