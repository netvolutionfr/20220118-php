<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$methode = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$protocole = $_SERVER['SERVER_PROTOCOL'];

echo "<p>Page trouvée</p>";

echo "<p>Méthode HTTP utilisée : $methode</p>";
echo "<p>URI : $uri</p>";
echo "<p>Protocole : $protocole</p>";
?>
</body>
</html>
