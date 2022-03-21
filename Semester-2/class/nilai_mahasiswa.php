<?php 
require_once './NilaiMahasiswa.php';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];

    $hasil = new NilaiMahasiswa($nim, $matkul, $nilai);
}

// Top
include_once './layout/atas.php';
// Navbar
include_once './layout/navbar.php';
?>
<!-- Main Content -->
<main class="container py-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Nilai Ujian</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <table class="w-100">
                            <tr>
                                <th>NIM</th>
                                <td>
                                    <input type="text" name="nim" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <th>Matkul</th>
                                <td>
                                    <select name="matkul" id="matkul" class="form-select" required>
                                        <option value="Pemrograman Web">Pemrograman Web</option>
                                        <option value="Basis Data">Basis Data</option>
                                        <option value="Python">Python</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Nilai</th>
                                <td>
                                    <input type="number" name="nilai" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button class="btn btn-success" type="submit" name="submit">Simpan</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <?php if(isset($_POST['submit'])) { ?>
        <div class="col-12 col-md-6">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">NIM : <?= $nim; ?></li>
                    <li class="list-group-item">Mata Kuliah : <?= $matkul; ?></li>
                    <li class="list-group-item">Nilai : <?= $nilai; ?></li>
                    <li class="list-group-item">Grade : <?= $hasil->grade(); ?></li>
                    <li class="list-group-item">Hasil Ujian : <?= $hasil->hasil(); ?></li>
                </ul>
            </div>
        </div>
        <?php } ?>
    </div>
</main>

<!-- Bottom -->
<?php include_once './layout/bawah.php'; ?>