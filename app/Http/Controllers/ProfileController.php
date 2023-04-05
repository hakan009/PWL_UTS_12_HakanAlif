<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function alif() {
        return view('profile.alif');
    }

    public function andika() {
        return view('profile.andika');
    }
}
