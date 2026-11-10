<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">

    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Tambah Buku</h1>
            <a href="{{ route('books.index') }}"
                class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Kembali</a>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block font-bold mb-1">Judul</label>
                <input type="text" name="judul" value="{{ old('judul') }}" class="w-full border p-2 rounded"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-bold mb-1">Penulis</label>
                <input type="text" name="penulis" value="{{ old('penulis') }}" class="w-full border p-2 rounded"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-bold mb-1">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}"
                    class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-bold mb-1">Kategori</label>
                <select name="kategori" class="w-full border p-2 rounded" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Non-Fiksi">Non-Fiksi</option>
                    <option value="Komik">Komik</option>
                    <option value="Sejarah">Sejarah</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block font-bold mb-1">Stok</label>
                <input type="number" name="stok" value="{{ old('stok') }}" class="w-full border p-2 rounded"
                    required>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan
                Buku</button>
        </form>
    </div>

</body>

</html>
