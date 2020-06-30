<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class DomainController extends Controller
{
    final public function index(string $domain): RedirectResponse
    {
        Session::put('domain', $domain);

        return redirect('/');
    }
}
