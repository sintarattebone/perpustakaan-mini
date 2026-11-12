<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50 p-6">
    <div class="text-center">
        <h1 class="bg-pink-600 text-white text-2xl font-bold text-center px-6 py-3 rounded-xl shadow w-full">📚 Daftar
            Buku
        </h1>
    </div>
    <a href="{{ route('books.create') }}" class="inline-block bg-white text-pink-700 px-4 py-1 rounded-xl mb-3">+ Tambah
        Buku</a>

    <table class="min-w-full bg-white mt-4 rounded-xl overflow-hidden">
        <thead class="bg-pink-100 text-pink-700">
            <tr>
                <th class="p-3 text-center">No.</th>
                <th class="p-3 text-left">Judul</th>
                <th class="p-3 text-left">Penulis</th>
                <th class="p-3 text-center">Tahun</th>
                <th class="p-3 text-center">Kategori</th>
                <th class="p-3 text-center">Stok</th>
                <th class="p-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr class="hover:bg-gray-100 transition duration-150">
                    <td class="p-3 text-center">{{ $books->firstItem() + $loop->index }}</td>
                    <td class="p-3">{{ $book->judul }}</td>
                    <td class="p-3">{{ $book->penulis }}</td>
                    <td class="p-3 text-center">{{ $book->tahun_terbit }}</td>
                    <td class="p-3 text-center">{{ $book->kategori }}</td>
                    <td class="p-3 text-center">{{ $book->stok }}</td>
                    <td class="p-3 text-center">
                        <a href="{{ route('books.edit', $book->id) }}"
                            class="bg-pink-500 text-white px-3 py-1 rounded-lg">✏️Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus?')"
                                class="bg-red-500 text-white px-3 py-1 rounded-lg">🗑️Hapus</button>
                        </form>
                    </td>
                    </>
            @endforeach
        </tbody>
    </table>
    <div class="p-4>" {{ $books->links() }} </div>
</body>

</html>
