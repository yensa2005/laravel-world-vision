<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createDetail()
    {
        return view('user.news.detail.create.create_detail');
    }
}
