<?php

declare(strict_types=1);

require_once __DIR__ . '/../../data/ReservationRepository.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$repository = new ReservationRepository();
$id = (int) $_GET['id'];
$repository->delete($id);

header('Location: index.php');
exit;