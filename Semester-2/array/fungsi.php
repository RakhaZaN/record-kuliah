<?php
$arr_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
$tims = ["Erwin", "Heru", "Ali", "Zaki"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array: Fungsi</title>
</head>
<body>
    <fieldset style="margin-bottom: 16px;">
        <legend>Fungsi sort($array)</legend>

        <ol>
            <?php
            foreach($arr_buah as $key => $buah) {
                echo "<li>{$key} - {$buah}</li>";
            }
            ?>
        </ol>
        <hr>
        <ol>
            <?php
            sort($arr_buah);
            foreach($arr_buah as $key => $buah) {
                echo "<li>{$key} - {$buah}</li>";
            }
            ?>
        </ol>
    </fieldset>

    <fieldset style="margin-bottom: 16px;">
        <legend>Fungsi array_pop($array)</legend>

        <?php
        array_pop($tims);
        foreach($tims as $person) {
            echo "{$person} <br/>";
        }
        ?>
    </fieldset>

    <fieldset style="margin-bottom: 16px;">
        <legend>Fungsi array_push($array)</legend>

        <?php
        array_push($tims, "Wati");
        foreach($tims as $person) {
            echo "{$person} <br/>";
        }
        ?>
    </fieldset>
    
    <fieldset style="margin-bottom: 16px;">
        <legend>Fungsi array_shift($array)</legend>

        <?php
        array_shift($tims);
        foreach($tims as $person) {
            echo "{$person} <br/>";
        }
        ?>
    </fieldset>

    <fieldset style="margin-bottom: 16px;">
        <legend>Fungsi array_unshift($array)</legend>

        <?php
        array_unshift($tims, "Joko", "Diah");
        foreach($tims as $person) {
            echo "{$person} <br/>";
        }
        ?>
    </fieldset>

</body>
</html>