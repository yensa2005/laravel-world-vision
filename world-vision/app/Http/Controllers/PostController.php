<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getDetail()
    {
        return view('user.news.detail.detail');
    }
    public function getDetail2()
    {
        return view('user.news.detail.detail-2');
    }

    public function createPost()
    {
        return view('admin.post.create.create');
    }
}
