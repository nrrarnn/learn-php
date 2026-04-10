<?php

class Sepatu {
    public string $merk;
    public string $warna;
    public int $harga;

    public function __construct(string $merk, string $warna, int $harga) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;

        echo "Objek sepatu $this->merk berhasil dibuat!<br>";
    }

    public function getInfoDetail() {
        echo "sepatu merk ini $this->merk, warna $this->warna, harga nya Rp. $this->harga";
    }

    public function hitungDiskon(int $persen) {
        $diskon = $this->harga * ($persen / 100);

        return (float) ($this->harga - $diskon);
    }


}

$sepatuArin = new Sepatu("laryn", "pink", 250000);

echo $sepatuArin->getInfoDetail();
echo "<br>";
echo $sepatuArin->hitungDiskon(15);