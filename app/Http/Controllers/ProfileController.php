<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // Fetch user data here if needed
        $user = auth()->user();

        return view('profile.index', compact('user'));
    }
}
