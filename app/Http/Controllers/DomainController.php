<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DomainController extends Controller
{
    final public function index(string $domain): RedirectResponse
    {
        if (false === \strpos($domain, '.')) {

            abort(404);

        }

        $validator = Validator::make(['domain' => "http://$domain"], [

            'domain' => 'nullable|url',

        ]);

        if ($validator->fails()) {

            abort(404);

        }

        Session::put('domain', $domain);

        return redirect('/');
    }
}
