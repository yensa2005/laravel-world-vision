<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('user.home.index');
    }

    public function getNews()
    {
        return view('layouts.uer_layout_news');
    }
    public function getNewsDetail()
    {
        return view('layouts.uer_layout_news_detail');
    }
    public function getProfile()
    {
        return view('layouts.uer_layout_profile');
    }
}
