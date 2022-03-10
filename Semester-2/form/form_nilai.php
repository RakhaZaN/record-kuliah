<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Sistem Penilaian</title>
</head>
<body>

    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                <h6>Sistem Penilaian</h6>
            </div>
            <div class="card-body">
                
                <form method="GET" action="">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select" required="required">
                            <option value="DDP">Dasar-Dasar Pemrograman</option>
                            <option value="BDI">Basis Data I</option>
                            <option value="WEB1">Pemrograman Web</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-8">
                        <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-8">
                        <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
                        <div class="col-8">
                        <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>

                <?php
                if (isset($_GET['submit'])) {
                    echo "===== Data Disimpan ===== <br>
                    Nama Siswa : {$_GET['nama']} <br>
                    Mata Kuliah : {$_GET['matkul']} <br>
                    Nilai UTS : {$_GET['uts']} <br>
                    Nilai UAS : {$_GET['uas']} <br>
                    Nilai Tugas Praktikum : {$_GET['tugas']}";
                }
                ?>
            </div>
            <div class="card-footer">
                <small>Develop By @razan &copy;2022</small>
            </div>
        </div>
    </div>

</body>
</html>