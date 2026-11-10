<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Digital')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <header class="bg-blue-700 text-white p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Perpustakaan Digital</h1>
        <span class="text-sm">Tugas Pemrograman Web 2</span>
    </header>

    <div class="flex">
        <aside class="w-64 bg-white shadow min-h-screen p-4">
            <nav class="space-y-2">
                <a href="#" class="block p-2 rounded hover:bg-gray-100">Dashboard</a>
                <a href="{{ route('books.index') }}"
                    class="block p-2 rounded bg-blue-100 text-blue-700 font-bold">Buku</a>
                <a href="#" class="block p-2 rounded hover:bg-gray-100">Kategori</a>
                <a href="#" class="block p-2 rounded hover:bg-gray-100">Peminjaman</a>
            </nav>
        </aside>

        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

</body>

</html>
