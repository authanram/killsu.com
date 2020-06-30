<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ImprintController extends Controller
{
    final public function index(): View
    {
        $host = Session::get('domain', 'killsu.com');

        return view('imprint', compact('host'));
    }
}
