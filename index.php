<?php 

class Absen{
    public $nama;
    public $kelas;

    public function __construct($nama, $kelas) {
        $this->nama = $nama;
        $this->kelas = $kelas;
    }
}

$absen1 = new Absen("Azriel Fauzi", "11");
$absen2 = new Absen("Puja Maulida", "11");

echo $absen2;
echo $absen1;

?>