<?php 

class Absen{
    public $nama;
    private $nis;
    public $kelas;

    public function __construct($nama, $nis,$kelas) {
        $this->nama = $nama;
        $this->nis = $nis;
        $this->kelas = $kelas;
    }

    public function setNis($nis)
    {
        $this->nis = $nis;
    }

    public function getNis()
    {
        return "{$this->nis}";
    }
}

$absen1 = new Absen("Azriel Fauzi", "11");
$absen2 = new Absen("Puja Maulida", "11");
$absen1->setNis(11907065);

echo $absen2;
echo $absen1;
echo $absen1->getNis();

?>