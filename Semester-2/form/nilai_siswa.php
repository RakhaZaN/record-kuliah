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

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nilai Siswa</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td><?= $nama; ?></td>
                    </tr>
                    <tr>
                        <th>Matkul</th>
                        <td>:</td>
                        <td><?= $matkul; ?></td>
                    </tr>
                    <tr>
                        <th>UTS</th>
                        <td>:</td>
                        <td><?= $uts; ?></td>
                    </tr>
                    <tr>
                        <th>UAS</th>
                        <td>:</td>
                        <td><?= $uas; ?></td>
                    </tr>
                    <tr>
                        <th>Tugas</th>
                        <td>:</td>
                        <td><?= $tugas; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>:</td>
                        <td><?= $status; ?></td>
                    </tr>
                    <tr>
                        <th>Grade</th>
                        <td>:</td>
                        <td><?= $grade; ?></td>
                    </tr>
                    <tr>
                        <th>Predikat</th>
                        <td>:</td>
                        <td><?= $predikat; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>

<?php include_once '../template/bawah.php'; ?>