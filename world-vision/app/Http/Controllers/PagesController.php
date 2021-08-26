<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('user.home.index');
    }
    public function getPost()
    {
        return view('user.post.posts');
    }
    public function getProfile()
    {
        return view('user.profile.profile');
    }
}
