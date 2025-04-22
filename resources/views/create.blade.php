<form method="POST" action="/pesanan">
    @csrf
    <input type="text" name="nama_pelanggan" placeholder="Nama Pelanggan" required>
    <input type="text" name="menu" placeholder="Menu" required>
    <input type="number" name="jumlah" placeholder="Jumlah" required>
    <button type="submit">Tambah Pesanan</button>
</form>
