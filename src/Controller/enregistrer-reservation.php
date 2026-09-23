<?php

declare(strict_types=1);

require_once __DIR__ . '/../../data/ReservationRepository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $repository = new ReservationRepository();

    if (empty($_POST['date']) || empty($_POST['heure_debut']) || empty($_POST['heure_fin'])) {
        die("Erreur : veuillez remplir la date et les heures.");
    }

    $date = $_POST['date'];
    $heureDebut = $_POST['heure_debut'];
    $heureFin = $_POST['heure_fin'];
    $salleId = (int) $_POST['salle_id'];
    $ligueId = (int) $_POST['ligue_id'];

    if ($repository->existsConflict($date, $heureDebut, $heureFin, $salleId)) {
        die('Cette salle est déjà réservée sur ce créneau.');
    }

    $repository->add(
        $date,
        $heureDebut,
        $heureFin,
        $salleId,
        $ligueId
    );

    header('Location: index.php');
    exit;
}