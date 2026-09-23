<?php

declare(strict_types=1);

require_once __DIR__ . '/../data/LigueRepository.php';
require_once __DIR__ . '/../data/ReservationRepository.php';

$ligues = (new LigueRepository())->findAll();
$repository = new ReservationRepository();
$resultats = [];

if (isset($_GET['ligue_id'])) {
    $resultats = $repository->findByLigue((int) $_GET['ligue_id']);
}

$titrePage = "Recherche des réservations";

require_once __DIR__ . '/../page/recherchePage.php';