<!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

       <title>SeniorERP-assignment</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <nav class="w-full h-16 bg-gray-800">
            <div class="container mx-auto">
                <div class="flex items-center justify-between">
                    <div>
                        @include('layouts.navbar')
                    </div>
                    <div>
                        @include('layouts.login_logout')
                    </div>
                </div>
            </div>
        </nav>

        {{$slot}}

    </body>

