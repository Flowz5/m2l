<?php
$route = $_GET['route'] ?? 'reservations';

switch ($route) {
    case 'reservations':
        require_once '../controle/reservationsControle.php';
        break;
    case 'salles':
        require_once '../controle/sallesControle.php';
        break;
    case 'nouvelle':
        require_once '../controle/nouvelleControle.php';
        break;
    case 'recherche':
        require_once '../controle/rechercheControle.php';
        break;
    default:
        echo "Erreur 404 : Page introuvable";
        break;
}