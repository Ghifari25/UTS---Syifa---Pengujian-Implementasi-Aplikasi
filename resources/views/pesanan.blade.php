<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Makanan</title>
</head>
<body>
    <h2>Form Pemesanan</h2>
    <form method="POST" action="/pesan">
        @csrf
        <label>Menu:</label><br>
        <input type="text" name="menu" value="{{ $menu ?? '' }}"><br><br>

        <label>Harga (Rp):</label><br>
        <input type="number" name="harga" value="{{ $harga ?? '' }}"><br><br>

        <label>Jumlah:</label><br>
        <input type="number" name="jumlah" value="{{ $jumlah ?? '' }}"><br><br>

        <button type="submit">Pesan</button>
    </form>

    @if(!empty($hasil))
        <hr>
        <h3>Hasil Pemesanan</h3>
        <p>Menu: {{ $menu }}</p>
        <p>Harga: Rp {{ number_format($harga) }}</p>
        <p>Jumlah: {{ $jumlah }}</p>
        <p><strong>Total Harga: Rp {{ number_format($total) }}</strong></p>
    @endif
</body>
</html>
