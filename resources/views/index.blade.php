<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
    </head>
    <body>
        <div id="app" class="h-screen w-full bg-gray-100">
            <App></App>
        </div>
    </body>
    <script src="/js/app.js"></script>
</html>
