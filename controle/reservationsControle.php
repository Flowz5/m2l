<?php

declare(strict_types=1);

require_once __DIR__ . '/../data/ReservationRepository.php';

if (isset($_GET['action']) && $_GET['action'] === 'supprimer' && isset($_GET['id'])) {
    require_once __DIR__ . '/../src/Controller/supprimer-reservation.php';
    exit;
}

$repository = new ReservationRepository();
$reservations = $repository->findAll();

$titrePage = "Maison des Ligues — Réservation de salles";

require_once __DIR__ . '/../page/reservationsPage.php';