<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile()
        {
            return \View::make('profile');
        }

    public function profile()
    {
        $list = Post::all();return view('posts.index', compact('list'));
    }
}
