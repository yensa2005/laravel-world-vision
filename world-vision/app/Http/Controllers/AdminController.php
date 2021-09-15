<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex()
    {
        return view('admin.index');
    }
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
    public function getCategory()
    {
        return view('admin.category.category');
    }
    public function getTag()
    {
        return view('admin.tag.tag');
    }
    public function getLogin()
    {
        return view('admin.login');
    }
    public function getRegister()
    {
        return view('admin.register');
    }
}
