<?php
require './Animal.php';

// Create object of animal
$animal = new Animal(['Harimau', 'Hiu', 'Kucing']);

echo "Index - Menampilakan data animals <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store("Kodok");
$animal->index();
echo "<br>";

echo "Update - Memperbarui data hewan <br>";
$animal->update(3, "Ikan Kembung");
$animal->index();
echo "<br>";

echo "Delete - Menghapus hewan <br>";
$animal->destroy(2);
$animal->index();
echo "<br>";
