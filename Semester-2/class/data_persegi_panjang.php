<?php

require_once './PersegiPanjang.php';

// Mendeklarasi objek
$perpan1 = new PersegiPanjang(20, 12);
$perpan2 = new PersegiPanjang(40, 10);

// Memanggil fungsi
echo "<br>Luas Persegi Panjang I : ".$perpan1->getLuas();
echo "<br>Luas Persegi Panjang II : ".$perpan2->getLuas();
echo "<br>Keliling Persegi Panjang I : ".$perpan1->getKeliling();
echo "<br>Keliling Persegi Panjang II : ".$perpan2->getKeliling();