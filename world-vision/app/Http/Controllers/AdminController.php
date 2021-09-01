<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getProfile()
    {
        return view('admin.profile.profile');
    }
}
