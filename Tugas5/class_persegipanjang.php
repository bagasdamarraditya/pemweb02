<?php
class PersegiPanjang {
    // Variabel yang ada dalam persegi panjang
    private $panjang;
    private $lebar;

    // Konstruktor untuk menginisialisasi panjang dan lebar
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // Method untuk mengembalikan luas persegi panjang
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    // Method untuk mengembalikan keliling persegi panjang
    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>
