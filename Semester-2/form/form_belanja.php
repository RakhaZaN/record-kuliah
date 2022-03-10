<?php 
$produk['TV'] = 4200000;
$produk['Kulkas'] = 3100000;
$produk['Mesin Cuci'] = 3800000;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form - Belanja</title>
</head>
<body>
    <div class="container py-5">
        <a href="../../index.html" class="btn btn-secondary btn-sm mb-3">Back to Dashboard</a>
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h6>Belanja Online</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group row">
                                <label for="customer" class="col-4 col-form-label">Customer</label> 
                                <div class="col-8">
                                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4">Pilih Produk</label> 
                                <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_0" type="radio" checked class="custom-control-input" value="TV" required="required"> 
                                    <label for="produk_0" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="Kulkas"> 
                                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="Mesin Cuci"> 
                                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                                <div class="col-8">
                                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h6>Daftar Harga</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($produk as $key => $value) { ?>
                        <li class="list-group-item"><?= $key . " : " . number_format($value)  ?></li>
                        <?php } ?>
                    </ul>
                    <div class="card-footer bg-primary text-white">
                        <p>Harga Dapat Berubah Setiap Saat</p>
                    </div>
                </div>
            </div>
        </div>

        <?php 
        if (isset($_POST['submit'])) {
            $total = $produk[$_POST['produk']] * $_POST['jumlah'];
            echo "===== Struk ===== <br>
            Nama Customer : {$_POST['customer']} <br>
            Produk Pilihan : {$_POST['produk']} <br>
            Jumlah Beli : {$_POST['jumlah']} <br>
            Total Belanja : {$total}";
        }
        ?>
    </div>
</body>
</html>