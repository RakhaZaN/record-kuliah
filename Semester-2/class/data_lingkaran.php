<?php

require_once './Ligkaran.php';

// Memanggil variable konstanta
echo 'Nilai PHI : '. Lingkaran::PHI;

// Membuat objek
$lingkaran1 = new Lingkaran(14);
$lingkaran2 = new Lingkaran(4);

// Memanggil fungsi
echo "<br>Luas Lingkaran I : ".$lingkaran1->getLuas();
echo "<br>Luas Lingkaran II : ".$lingkaran2->getLuas();
echo "<br>Keliling Lingkaran I : ".$lingkaran1->getKeliling();
echo "<br>Keliling Lingkaran II : ".$lingkaran2->getKeliling();