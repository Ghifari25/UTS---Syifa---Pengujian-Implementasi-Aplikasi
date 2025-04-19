<?php

namespace App\Models\Simulasi;

class Pesanan
{
    public $menu;
    public $jumlah;

    public function __construct(Menu $menu, int $jumlah)
    {
        $this->menu   = $menu;
        $this->jumlah = $jumlah;
    }

    public function hitungTotal(): int
    {
        return $this->menu->harga * $this->jumlah;
    }
}
