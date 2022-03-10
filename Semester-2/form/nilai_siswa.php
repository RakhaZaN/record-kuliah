<?php
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];

if (isset($_POST['submit'])) {
    echo "===== Data Disimpan ===== <br>
    Nama Siswa : {$nama} <br>
    Mata Kuliah : {$matkul} <br>
    Nilai UTS : {$uts} <br>
    Nilai UAS : {$uas} <br>
    Nilai Tugas Praktikum : {$tugas} <br>";

    $total = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);
    // echo $total;

    if ($total >= 0 && $total <= 35) {
        echo "<br>ANDA TIDAK LULUS dengan Grade Nilai : E";
    } else if ($total <= 55) {
        echo "<br>ANDA TIDAK LULUS dengan Grade Nilai : D";
    } else if ($total <= 69) {
        echo "<br>ANDA LULUS dengan Grade Nilai : C";
    } else if ($total <= 84) {
        echo "<br>ANDA LULUS dengan Grade Nilai : B";
    } else if ($total <= 100) {
        echo "<br>ANDA LULUS dengan Grade Nilai : A";
    } else {
        echo "Data Tidak Valid, Silahkan cek kembali form data!";
    }
} 