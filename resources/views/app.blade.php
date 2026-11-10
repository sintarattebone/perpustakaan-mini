<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tugas Pemrograman Web 2')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <nav class="bg-blue-600 text-white p-4 shadow">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <a href="/" class="font-bold text-xl">📚 Perpustakaan Mini</a>
            <a href="{{ route('books.index') }}" class="hover:underline">Data Buku</a>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto p-6">
        @yield('content')
    </main>

    <footer class="text-center text-gray-500 text-sm py-6">
        Tugas Pemrograman Web 2 - Laravel 13
    </footer>

</body>

</html>
