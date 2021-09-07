<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getProfile()
    {
        return view('admin.profile.profile');
    }
    public function getAuthor()
    {
        return view('admin.author.author');
    }
    public function getPost()
    {
        return view('admin.post.post');
    }
}
