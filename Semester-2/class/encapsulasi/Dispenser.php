<?php

class Dispenser {
    protected $vol = 0, $harga_segelas;
    private $vol_gelas;
    public $nama_minuman;

    public function __construct($nama)
    {
        $this->nama_minuman = $nama;
    }

    public function setVolGelas($vol_gelas)
    {
        $this->vol_gelas = $vol_gelas;
    }

    public function setHargaSegelas($harga)
    {
        $this->harga_segelas = $harga;
    }

    public function getIsiDispenser()
    {
        return $this->vol;
    }

    public function isiDispenser($volume)
    {
        $this->vol += $volume;
    }

    public function dibeli()
    {
        if ($this->getIsiDispenser() < 250) {
            echo '<p>Isi dispenser tidak mencukupi, silahkan isi terlebih dahulu!<p>';
            return false;
        }

        $this->vol -= $this->vol_gelas;
        
        echo "<p>Terimakasih telah membeli {$this->nama_minuman} kami</p>";
        return true;
    }

    public function status()
    {
        echo "<h1>Detail Dispenser {$this->nama_minuman}</h1>";
        echo "<p>
        Isi dispenser: {$this->getIsiDispenser()} <br>
        Harga per gelas: {$this->harga_segelas}
        </p>";
    }
}

$jus = new Dispenser('Jus');
$jus->setVolGelas(250);
$jus->setHargaSegelas(5000);
$jus->isiDispenser(10000);
$jus->status();

$jus->dibeli();
$jus->dibeli();
// $jus->dibeli();
// $jus->dibeli();
// $jus->dibeli();
// $jus->dibeli();
// $jus->dibeli();
// $jus->dibeli();
// $jus->dibeli();
// $jus->dibeli();
$jus->status();