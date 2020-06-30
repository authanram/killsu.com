<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Back soon.</title>
    @include('styles')
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">

        <div class="title m-b-md">
            Imprint
        </div>

        <div class="m-b-md--small">
            {{ $host }}
            <br>
            <br>
            Daniel Seuffer, Geißwiesen 24/1, D-72227 Egenhausen
            <br>
            d.seuffer@gmail.com | 0049 157 358 000 60
        </div>

        <div class="links">
            <a href="/{{ request()->input('d') ? '?d=' . request()->input('d') : '' }}">Back</a>
        </div>

    </div>
</div>
</body>
</html>
