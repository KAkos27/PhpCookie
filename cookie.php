<?php
if (!isset($_COOKIE["latogatas"])) {
    $_COOKIE["latogatas"] = 1;
    $latogatas = 1;
} elseif (isset($_COOKIE["felhasznalo"])) {
    $latogatas = $_COOKIE["latogatas"] + 1;
} else {
    $latogatas = $_COOKIE["latogatas"];
}
setcookie("felhasznalo", "Ákos", time() + 1);
setcookie("latogatas", $latogatas, time() + 50);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_COOKIE["felhasznalo"]) && isset($_COOKIE["latogatas"])) {
        echo "Üdvözlünk " . $_COOKIE["felhasznalo"] . "!<br>";
        echo "Ez a " . $_COOKIE["latogatas"] . ". látogatásod!";
    } else {
        echo "Üdvözlünk vendég!";
    }
    ?>
</body>

</html>