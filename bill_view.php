<?php
    $filename = $_GET['file'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

    echo "<iframe src=\"./bill/$filename\" width=\"100%\" style=\"height:800px\"></iframe>";

    ?>
</body>
</html>