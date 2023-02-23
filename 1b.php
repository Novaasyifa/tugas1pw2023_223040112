<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1b.php</title>
</head>
<body>
    <?php  
    //2 digit terakhir npm 12

    $a ="12";
    $b ="5";
    $c ="2";
    $d ="75";
    $e ="20";

    print"aku adalah angka <b> $a </b><br>";

    //jika dikali 5
    $w=$a*$b;
    print"jika aku dikali $b, maka aku sekarng menjadi <b> $w </b><br>";

    //jika dibagi 2
    $x=$w/$c;
    print"jika aku dibagi $c, maka aku sekarang menjadi <b> $x </b><br>";

    //jika ditambah 75
    $y=$x+$d;
    print"jika aku ditambah $d, maka aku sekarang menjadi <b> $y </b><br>";

    //jika dikurang 20
    $z=$y-$e;
    print"jika aku dikurang $e, maka aku sekarang menjadi <b> $z </b><br>";

    ?>
</body>
</html>