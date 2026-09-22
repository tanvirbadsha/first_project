<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-200">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Home page </title>
</head>

<body class="h-full">
    <nav>
        <ul class="bg-black text-white flex gap-4 p-2 py-6 my-4">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')" :type="'b'">contact</x-nav-link>
        </ul>
    </nav>
    <header>
        <h1 class="text-6xl uppercase">{{  $heading }}</h1>
    </header>
    <main class="flex justify-center items-center h-full">
        {{ $slot }}
    </main>
</body>

</html>