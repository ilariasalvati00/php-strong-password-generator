<?php
    function password_generator($lenght) {
        $caratteriPossibili = '!"#$%&\()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
        $password="";
        for($i=0; $i<$lenght; $i++) {
            $password = $password . $caratteriPossibili[rand(0,strlen($caratteriPossibili)-1)];
        }

        return $password;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
        $password_lenght = $_GET["password_lenght"] ?? "0";     
        $password_lenght = intval($password_lenght); 
        $chiave = password_generator($password_lenght);

        echo "<h1>$chiave</h1>";
    ?>
</body>
</html>