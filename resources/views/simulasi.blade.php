<!DOCTYPE html>
<html>
<head>
    <title>Simulasi Pesanan</title>
</head>
<body>
    <h1>Hasil Simulasi</h1>

    @if ($login)
        <p><strong>Menu:</strong> {{ $menu->nama }}</p>
        <p><strong>Harga Satuan:</strong> Rp {{ number_format($menu->harga) }}</p>
        <p><strong>Jumlah Pesanan:</strong> {{ $pesanan->jumlah }}</p>
        <p><strong>Total Harga:</strong> Rp {{ number_format($total) }}</p>
    @else
        <p style="color: red;">Login gagal. Email atau password salah.</p>
    @endif
</body>
</html>
