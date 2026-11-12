<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Digital')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-pink-100 p-5 flex flex-col">
            <div class="text-center mb-8">
                <div class="text-5xl mb-2">📚</div>
                <h1 class="text-2xl font-bold text-pink-700">Perpustakaan</h1>
                <p class="text-sm text-pink-500">Laravel 13</p>
            </div>
            <nav class="space-y-2">
                <a href="#" class="block bg-pink-500 text-white p-3 rounded-xl font-bold">🏠 Dashboard</a>
                <a href="{{ route('books.index') }}" class="block p-3 rounded-xl hover:bg-pink-200 text-pink-700">📦
                    Buku</a>
                <a href="{{ route('books.create') }}" class="block p-3 rounded-xl hover:bg-pink-200 text-pink-700">➕
                    Tambah Buku</a>
                <a href="#" class="block p-3 rounded-xl hover:bg-pink-200 text-pink-700">ℹ️ Tentang</a>
            </nav>
            <p class="mt-auto text-center text-pink-500 italic">Kelola Buku dengan Mudah 💗</p>
        </aside>

        <main class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <p class="text-pink-600 font-semibold">🌸 Selamat Datang di Perpustakaan Mini Digital! 💗</p>
                <span class="bg-pink-500 text-white px-4 py-2 rounded-xl">↪ Logout</span>
            </div>
            @yield('content')
        </main>
    </div>

</body>

</html>
