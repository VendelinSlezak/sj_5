<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Obchod</h1>
    <?php
       $veci = array("Jablko" => 5, "Banan" => 6, "Rozok" => 2);
       foreach($veci as $polozka => $cena) {
        echo "Polozka $polozka stoji $cena eur.<br>";
       }
    ?>
</body>
</html>