<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Блог' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
<!-- Навигационное меню -->
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-xl font-bold text-gray-800">Мой Блог</a>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800">О нас</a>
                <a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-800">Контакты</a>
            </div>
            <div x-data="{ isOpen: false }" class="md:hidden">
                <button @click="isOpen = !isOpen" class="p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"/>
                    </svg>
                </button>
                <div x-show="isOpen" class="mt-2 space-y-2 bg-white shadow-lg rounded-lg p-4">
                    <a href="{{ route('about') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">О нас</a>
                    <a href="{{ route('contact') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100">Контакты</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Контент страницы -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    @yield('content')
</div>
</body>
</html>
