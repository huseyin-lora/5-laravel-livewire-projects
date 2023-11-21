<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <livewire:styles />
</head>

{{-- 
    To work with TailwindCSS, you need to
    1- npm run dev
    2- php artisan serve
    --}}

<body>
    <nav class="flex bg-slate-700 text-white mb-5 justify-center">
        <a href="/counter" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('counter')) ? 'bg-slate-900' : '' }}">Counter</a>
        <a href="/calculator" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('calculator')) ? 'bg-slate-900' : '' }}">Calculator</a>
        <a href="/todo-list" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('todo-list')) ? 'bg-slate-900' : '' }}">TodoList</a>
        <a href="/cascading-dropdown" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('cascading-dropdown')) ? 'bg-slate-800' : '' }}">Cascading Dropdown</a>
        <a href="/products" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('products')) ? 'bg-slate-800' : '' }}">Products Search</a>
        <a href="/image-upload" class="py-4 px-6 hover:bg-slate-800 {{ (request()->routeIs('image-upload')) ? 'bg-slate-800' : '' }}">Image Upload</a>
    </nav>

    {{ $slot }}

    <livewire:todo-list /> 
    <livewire:product-search /> 

    <livewire:scripts />
</body>

</html>
