<?php

<?php

class LayananKurir {
    public string $nomorResi;
    protected int $hargaDasar = 10000;

    public function __construct(string $resi) {
        $this->nomorResi = $resi;
    }

    public function cetakResi(): void {
        echo "Mencetak resi: $this->nomorResi <br>";
    }
}

class KurirEkspres extends LayananKurir {
    private int $biayaPrioritas = 5000;

    public function hitungTotal(): int {
        return $this->hargaDasar + $this->biayaPrioritas;
    }
}

$pengiriman = new KurirEkspres("EXP-123");
$pengiriman->cetakResi(); 
echo "Total Ongkir Ekspres: Rp " . $pengiriman->hitungTotal();


?>