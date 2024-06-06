<?php




// UserController.php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::with(['posts.comments', 'posts.tags', 'posts.category', 'roles'])->get();
        // // dd("$users");
        // return view('test', compact('users'));

        // Eager load relationships
        $users = User::with(['posts.comments', 'posts.tags', 'posts.category', 'roles'])->get();
        return view('test', compact('users'));
    }
    
}

