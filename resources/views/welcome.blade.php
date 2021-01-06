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

    <div class="contained mx-auto">
        <div class="bg-gray-300 rounded-lg flex items-center justify-end">
            @include('layouts.login_logout')
        </div>
    </div>

    <div class="contained mx-auto">
            <div class="text-2xl bg-gray-100 rounded-lg flex items-center justify-center p-5 border border-bg-gray-100 rounded-lg">
                SeniorERP - assignment
            </div>

            <div class="flex text-2xl bg-gray-100 rounded-lg flex items-center justify-center p-5 border border-bg-gray-100 rounded-lg">
                Created by Mihai Munteanu
            </div>

        </div>

    </div>
