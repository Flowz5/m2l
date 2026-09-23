<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= $titrePage ?? 'M2L' ?></title>
</head>
<body>
<h1><?= $titrePage ?? 'Maison des Ligues' ?></h1>
<nav>
    <a href="index.php?route=reservations">Réservations</a> |
    <a href="index.php?route=salles">Salles</a> |
    <a href="index.php?route=nouvelle">Nouvelle réservation</a> |
    <a href="index.php?route=recherche">Recherche</a>
</nav>
<hr>