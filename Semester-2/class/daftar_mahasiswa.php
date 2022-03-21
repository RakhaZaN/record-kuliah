<?php 
require_once './Mahasiswa.php';

// Membuat objek mahasiswa
$mhs1 = new Mahasiswa('0110221254', 'Rakha Zahran Nurfirmansyah');
$mhs1->thn_angkatan = '2021';
$mhs1->prodi = 'TI';
$mhs1->ipk = 3.88;

$mhs2 = new Mahasiswa('0110221231', 'Antonio Siregar');
$mhs2->thn_angkatan = '2021';
$mhs2->prodi = 'SI';
$mhs2->ipk = 3;

$mhs3 = new Mahasiswa('0110221211', 'Putri Asyifa');
$mhs3->thn_angkatan = '2021';
$mhs3->prodi = 'TI';
$mhs3->ipk = 4;

// Top
include_once './layout/atas.php';
// Navbar
include_once './layout/navbar.php';
?>
  <!-- Main content -->
  <main class="container py-5">
    <div class="table-responsive">
      <table class="table table-striped" id="table">
      <thead>
          <tr>
              <th>NO</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Prodi</th>
              <th>Tahun Angkatan</th>
              <th>IPK</th>
              <th>Predikat</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td><?= $mhs1->nim ?></td>
              <td><?= $mhs1->nama ?></td>
              <td><?= $mhs1->prodi ?></td>
              <td><?= $mhs1->thn_angkatan ?></td>
              <td><?= $mhs1->ipk ?></td>
              <td><?= $mhs1->predikat_ipk() ?></td>
          </tr>
          <tr>
              <td>2</td>
              <td><?= $mhs2->nim ?></td>
              <td><?= $mhs2->nama ?></td>
              <td><?= $mhs2->prodi ?></td>
              <td><?= $mhs2->thn_angkatan ?></td>
              <td><?= $mhs2->ipk ?></td>
              <td><?= $mhs2->predikat_ipk() ?></td>
          </tr>
          <tr>
              <td>3</td>
              <td><?= $mhs3->nim ?></td>
              <td><?= $mhs3->nama ?></td>
              <td><?= $mhs3->prodi ?></td>
              <td><?= $mhs3->thn_angkatan ?></td>
              <td><?= $mhs3->ipk ?></td>
              <td><?= $mhs3->predikat_ipk() ?></td>
          </tr>
      </tbody>
      </table>
    </div>
  </main>
  <!-- Bottom -->
<?php include_once './layout/bawah.php' ?>