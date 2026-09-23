<?php

declare(strict_types=1);

require_once __DIR__ . '/../data/SalleRepository.php';
require_once __DIR__ . '/../data/LigueRepository.php';
require_once __DIR__ . '/../src/Controller/enregistrer-reservation.php';

$salles = (new SalleRepository())->findAll();
$ligues = (new LigueRepository())->findAll();

$titrePage = "Nouvelle réservation";

require_once __DIR__ . '/../page/nouvellePage.php';