<!DOCTYPE html>
<html>

<head>
    <title>Data Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-8 bg-gray-50">

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Data Buku</h1>
        <a href="{{ route('books.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah
            Buku</a>
    </div>

    <div class="overflow-x-auto bg-white shadow rounded">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">No</th>
                    <th class="px-4 py-2 text-left">Judul</th>
                    <th class="px-4 py-2 text-left">Penulis</th>
                    <th class="px-4 py-2 text-left">Tahun Terbit</th>
                    <th class="px-4 py-2 text-left">Kategori</th>
                    <th class="px-4 py-2 text-left">Stok</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $index => $book)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $books->firstItem() + $index }}</td>
                        <td class="px-4 py-2">{{ $book->judul }}</td>
                        <td class="px-4 py-2">{{ $book->penulis }}</td>
                        <td class="px-4 py-2">{{ $book->tahun_terbit }}</td>
                        <td class="px-4 py-2">{{ $book->kategori }}</td>
                        <td class="px-4 py-2">{{ $book->stok }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-6 text-center text-gray-500">Belum ada data buku.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $books->links() }}
    </div>

</body>

</html>
