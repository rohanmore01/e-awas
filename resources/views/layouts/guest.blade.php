<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('layout')

@section('content')
    <div class="flex flex-col sm:justify-center items-center pt-4 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-0 px-6 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg" style="margin:20px;">
            {{ $slot }}
        </div>
    </div>
@endsection
