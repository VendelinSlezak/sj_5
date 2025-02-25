<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavný nadpis</h1>
    <?php
       $data = array("desat" => 10, "dvadsat" => 20, "jedna" => 1);
       foreach($data as $str => $cislo) {
        echo "Cast pola: $str je cislo $cislo<br>";
       }
       // cosi sa zmenilo
    ?>
</body>
</html>