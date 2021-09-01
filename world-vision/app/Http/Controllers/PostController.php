<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getDetail()
    {
        return view('user.news.detail.detail');
    }

    public function createDetail()
    {
        return view('admin.post.create.create');
    }
}
