@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Контакты</h1>
        <x-form action="/contact" method="POST" buttonText="Отправить сообщение">
            <input type="text" name="name" placeholder="Ваше имя" class="border p-2 w-full">
            <input type="email" name="email" placeholder="Ваш email" class="border p-2 w-full">
            <textarea name="message" placeholder="Ваше сообщение" class="border p-2 w-full"></textarea>
        </x-form>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelector('form').addEventListener('submit', (e) => {
            const email = document.querySelector('input[type="email"]');
            if (!email.value.includes('@')) {
                e.preventDefault();
                alert('Введите корректный email!');
            }
        });
    </script>
@endpush
