<form method="POST" action="/pesanan/{{ $pesanan->id }}">
    @csrf
    @method('PUT')
    <input type="text" name="nama_pelanggan" value="{{ $pesanan->nama_pelanggan }}" required>
    <input type="text" name="menu" value="{{ $pesanan->menu }}" required>
    <input type="number" name="jumlah" value="{{ $pesanan->jumlah }}" required>
    <button type="submit">Update Pesanan</button>
</form>
