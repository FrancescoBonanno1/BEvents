<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <main>
        <nav class="navbar">
            <a href="/">login</a>
        </nav>
        
        <div class="containerHome" >
            @foreach ($operators as $operator)
                @if ($operator->sponsorships->some(function ($sponsorship) {
                    return now()->gte($sponsorship->operatorSponsorship->start_date) && now()->lt($sponsorship->operatorSponsorship->end_date);
                }))
                    <h2>{{ $operator->name }}</h2>
        
                    @if ($operator->specializations->isNotEmpty())
                        <p>Specializzazioni:</p>
                        @foreach ($operator->specializations as $specialization)
                            <p>{{ $specialization->name }}</p>
                        @endforeach
                    @endif
                @endif
            @endforeach
        </div>
        
    </main>
</body>
