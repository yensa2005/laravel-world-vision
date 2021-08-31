<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('user.home.index');
    }

    // public function getNews()
    // {
    //     return view('user.news.news');
    // }
    // public function getNewsDetail()
    // {
    //     return view('user.news.detail');
    // }
    public function getProfile()
    {
        return view('user.profile.profile');
    }
}
