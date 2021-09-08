<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function createTag()
    {
        return view('admin.tag.create.create');
    }
}
