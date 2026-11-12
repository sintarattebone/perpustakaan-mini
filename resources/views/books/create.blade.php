<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50 p-6">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-2xl shadow">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-pink-700">Tambah Buku</h1>
            <a href="{{ route('books.index') }}"
                class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-1 rounded-lg text-sm font-bold">Kembali</a>
        </div>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="font-semibold text-pink-700">Judul</label>
                <input type="text" name="judul" class="w-full border border-pink-200 rounded-xl p-2 mt-1" required
                    data-pesan="Judul wajib diisi"
                    oninput="this.setCustomValidity(this.validity.valueMissing ? 'Judul wajib diisi' : '')">
            </div>
            <div class="mb-3">
                <label class="font-semibold text-pink-700">Penulis</label>
                <input type="text" name="penulis" class="w-full border border-pink-200 rounded-xl p-2 mt-1" required
                    data-pesan="Penulis wajib diisi"
                    oninput="this.setCustomValidity(this.validity.valueMissing ? 'Penulis wajib diisi' : '')">
            </div>
            <div class="mb-3">
                <label class="font-semibold text-pink-700">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="w-full border border-pink-200 rounded-xl p-2 mt-1"
                    required data-pesan="Tahun terbit wajib diisi"
                    oninput="this.setCustomValidity(this.validity.valueMissing ? 'Tahun terbit wajib diisi' : '')">
            </div>
            <div class="mb-3">
                <label class="font-semibold text-pink-700">Kategori</label>
                <select name="kategori" class="w-full border border-pink-200 rounded-xl p-2 mt-1" required
                    data-pesan="Kategori wajib dipilih"
                    oninput="this.setCustomValidity(this.validity.valueMissing ? 'Kategori wajib dipilih' : '')">
                    <option value="">-- Pilih Kategori --</option>
                    <option>Fiksi</option>
                    <option>Non-Fiksi</option>
                    <option>Sejarah</option>
                    <option>Komik</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="font-semibold text-pink-700">Stok</label>
                <input type="number" name="stok" class="w-full border border-pink-200 rounded-xl p-2 mt-1" required
                    data-pesan="Stok wajib diisi"
                    oninput="this.setCustomValidity(this.validity.valueMissing ? 'Stok wajib diisi' : '')">
            </div>
            <button type="submit"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 rounded-xl">Simpan Buku</button>
        </form>

        <script>
            document.querySelectorAll('input, select').forEach(function(el) {
                el.addEventListener('invalid', function() {
                    el.setCustomValidity(el.dataset.pesan || 'Wajib diisi');
                });
                el.addEventListener('input', function() {
                    el.setCustomValidity('');
                });
                el.addEventListener('change', function() {
                    el.setCustomValidity('');
                });
            });
        </script>
    </div>
</body>

</html>
