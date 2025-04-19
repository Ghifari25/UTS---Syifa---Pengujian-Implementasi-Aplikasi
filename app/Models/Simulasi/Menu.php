<?php

namespace App\Models\Simulasi;

class Menu
{
    public $nama;
    public $harga;

    public function __construct(string $nama, int $harga)
    {
        $this->nama  = $nama;
        $this->harga = $harga;
    }
}
