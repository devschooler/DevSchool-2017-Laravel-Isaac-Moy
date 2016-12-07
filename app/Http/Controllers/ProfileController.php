<?php

namespace App\Http\Controllers;
use App\Models\Post;


use App\Models\Event;

use Illuminate\Http\Request;


class ProfileController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('Profile.profile', compact('posts'));
    }
}
