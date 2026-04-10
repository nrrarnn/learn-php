<?php

class PaketLaryn {
    private string $isi;       
    private float $berat;     
    public string $nomorResi; 

    public function __construct(string $isi, float $berat, string $resi) {
        $this->isi = $isi;
        $this->berat = $berat;
        $this->nomorResi = $resi;
    }

    public function getBerat(): float {
        return $this->berat;
    }

    public function gantiIsi(string $isiBaru): void {
        if ($isiBaru === "Barang Terlarang") {
            echo "Gagal: Isi paket melanggar aturan!<br>";
        } else {
            $this->isi = $isiBaru;
            echo "Berhasil: Isi paket diperbarui.<br>";
        }
    }
}

$paketArin = new PaketLaryn("Sepatu Laryn", 1.2, "RESI-001");

echo "Nomor Resi: " . $paketArin->nomorResi . "<br>";

echo "Berat Paket: " . $paketArin->getBerat() . " kg<br>";

$paketArin->gantiIsi("Sandal Laryn");
