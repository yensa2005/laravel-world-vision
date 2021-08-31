<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfile()
    {
        return view('user.profile.edit.edit_profile');
    }
}
