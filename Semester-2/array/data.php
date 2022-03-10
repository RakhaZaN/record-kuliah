<?php 
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
$ns5 = ['id'=>5,'nim'=>'01135','uts'=>100,'uas'=>100,'tugas'=>100];

$arr_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <title>Array: Data</title>
</head>
<body>

    <div class="container mt-5">
        <h3>Daftar Nilai Siswa</h3>

        <div class="table-responsive">
            <table class="table table-striped w-100" id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Tugas</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($arr_nilai as $ns) {
                        $na = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                    ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $ns['nim']; ?></td>
                        <td><?= $ns['uts']; ?></td>
                        <td><?= $ns['uas']; ?></td>
                        <td><?= $ns['tugas']; ?></td>
                        <td><?= number_format($na, 2, ",", "."); ?></td>
                    </tr>
                    <?php
                    $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Datatables JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
</body>
</html>