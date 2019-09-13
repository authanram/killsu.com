<?php

$domains = [
    // clients
    'vitakinetik.de',
    'fernschmecker.de',
    // codename hope
    'codename-hope.de',
    'codename-hope.net',
    'codename-hope.org',
    // killsu
    'killsu.de',
    'killsu.net',
    // personal
    'assembly1.com',
    'fragger.net',
    'gemeindehaus.info',
    'incredishell.com',
    'mysong.rocks',
    'mytmp.net',
    'nightlife.rocks',
    'non4me.de',
    'restock.international',
    'skydiveid.com',
    'source7.de',
];

Route::get('/', static function () {
    return view('welcome');
});

Route::get('/domain/{domain?}', static function ($domain = null) use ($domains) {
    if (in_array($domain, $domains, true)) {
        return redirect('/')->withCookie('domain', $domain, 60);
    }

    return redirect('/');
});

Route::get('/imprint', static function () {
    return view('imprint');
});
