<?php
// LOGIQUE (business logic)
    $maVariable = 42;


    // AFFICHAGE (html - view)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
</head>
<body>
    <h1>Mon titre</h1>
    <p>Façons d'afficher une variable : </p>
    <p><?= $maVariable; ?></p>
    <!--En Laravel : <p>{{ $maVariable }}</p>-->
</body>
</html>