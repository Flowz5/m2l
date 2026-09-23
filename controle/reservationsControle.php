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
require_once __DIR__ . '/../page/template/header.php';
?>

    <table border="1" cellpadding="6">
        <tr><th>Date</th><th>Créneau</th><th>Salle</th><th>Ligue</th><th>Action</th></tr>
        <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?= $reservation->dateReservation ?></td>
                <td><?= $reservation->getCreneau() ?></td>
                <td><?= $reservation->salle->getNom() ?></td>
                <td><?= $reservation->ligue->getNom() ?></td>
                <td><a href="index.php?route=reservations&action=supprimer&id=<?= $reservation->id ?>">Annuler</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php require_once __DIR__ . '/../page/template/footer.php'; ?>