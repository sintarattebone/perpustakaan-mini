<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">

    <div class="bg-white p-6 rounded shadow max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Buku</h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-1">Judul</label>
                <input type="text" name="judul" value="{{ $book->judul }}" class="w-full border p-2 rounded"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Penulis</label>
                <input type="text" name="penulis" value="{{ $book->penulis }}" class="w-full border p-2 rounded"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}"
                    class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Kategori</label>
                <input type="text" name="kategori" value="{{ $book->kategori }}" class="w-full border p-2 rounded"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Stok</label>
                <input type="number" name="stok" value="{{ $book->stok }}" class="w-full border p-2 rounded"
                    required>
            </div>

            <div class="flex gap-2">
                <a href="{{ route('books.index') }}" class="bg-gray-300 px-4 py-2 rounded">Batal</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update
                    Buku</button>
            </div>
        </form>
    </div>

</body>

</html>
