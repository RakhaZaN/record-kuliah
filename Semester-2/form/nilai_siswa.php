<?php

require_once '../function/lib_fungsi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];

    $total = totalNilai($uts, $uas, $tugas);
    $status = kelulusan($total);
    $grade = grade($total);
    $predikat = predikat($grade);
} 

include_once '../template/atas.php';
?>

<div class="container py-5">



</div>

<?php include_once '../template/bawah.php'; ?>