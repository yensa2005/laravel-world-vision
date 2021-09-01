<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfile()
    {
        return view('admin.profile.edit.edit_profile');
    }
}
