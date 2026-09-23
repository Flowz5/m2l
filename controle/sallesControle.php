<?php

declare(strict_types=1);

require_once __DIR__ . '/../data/SalleRepository.php';

$repository = new SalleRepository();
$salles = $repository->findAll();

$titrePage = "Salles disponibles";

require_once __DIR__ . '/../page/sallesPage.php';