<?php 

// var_dump($_POST);
// recive data post
$name = $_POST['inName'] != '' ? $_POST['inName'] : 'Rakha Zahran Nurfirmansyah';
$address = $_POST['inAddress'] != '' ? $_POST['inAddress'] : '123 Street';
$telp = $_POST['inTelp'] != '' ? $_POST['inTelp'] : '+627928374923';
$email = $_POST['inEmail'] != '' ? $_POST['inEmail'] : 'your.name@email.com';
$instruction = $_POST['instruction'] != '' ? $_POST['instruction'] : '-';
$crust = isset($_POST['crust']) ? $_POST['crust'] : 'none';
$toppings = isset($_POST['top1']) ? $_POST['top1'] . " | " : '';
$toppings .= isset($_POST['top2']) ? $_POST['top2'] . " | " : '';
$toppings .= isset($_POST['top3']) ? $_POST['top3'] . " | " : '';
$toppings .= isset($_POST['top4']) ? $_POST['top4'] . " | " : '';
$toppings .= isset($_POST['top5']) ? $_POST['top5'] . " | " : '';
$toppings .= isset($_POST['top6']) ? $_POST['top6'] . " | " : '';
$toppings .= isset($_POST['top7']) ? $_POST['top7'] . " | " : '';
// echo $toppings;
$many = $_POST['many'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak {
            /* width: min-content; */
            background-color: rgba(255, 196, 173, 0.3);
            padding: 10px 50px 50px;
            border-radius: 20px;
            margin-bottom: 1rem;
        }
        table {
            margin-left: 20px;
        }
        table tbody th {
            text-align: left;
        }
        h1, h3 {
            margin-bottom: 0;
        }
    </style>
    <title>Order Success</title>
</head>
<body>

    <div class="kotak">

        <center>
            <h1>Thank You</h1>
            <hr>
        </center>
    
        <p>Thank you for ordering from Black Goose Bistro. We have recieved the following information about your order.</p>
    
        <h3 style="color: salmon;">Your Information</h3>
        <table cellspacing="5">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>:</td>
                    <td><?= $name; ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>:</td>
                    <td><?= $address; ?></td>
                </tr>
                <tr>
                    <th>Telephone Number</th>
                    <td>:</td>
                    <td><?= $telp; ?></td>
                </tr>
                <tr>
                    <th>Email Address</th>
                    <td>:</td>
                    <td><?= $email; ?></td>
                </tr>
            </tbody>
        </table>
    
        <p><b>Delivery Instruction :</b> <?= $instruction; ?></p>
    
        <h3 style="color: salmon;">Your Pizza</h3>
        <table cellspacing="5">
            <tbody>
                <tr>
                    <th>Crust</th>
                    <td>:</td>
                    <td><?= $crust; ?></td>
                </tr>
                <tr>
                    <th>Toppings</th>
                    <td>:</td>
                    <td><?= $toppings; ?></td>
                </tr>
                <tr>
                    <th>Number</th>
                    <td>:</td>
                    <td><?= $many; ?></td>
                </tr>
            </tbody>
        </table>

    </div>
    
    <a href="./">Make another order</a>
    
</body>
</html>