<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WelcomeController extends Controller
{
    final public function index(): View
    {
        return view('welcome');
    }
}
