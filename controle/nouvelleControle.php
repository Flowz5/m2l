<?php

declare(strict_types=1);

require_once __DIR__ . '/../data/SalleRepository.php';
require_once __DIR__ . '/../data/LigueRepository.php';
require_once __DIR__ . '/../src/Controller/enregistrer-reservation.php';

$salles = (new SalleRepository())->findAll();
$ligues = (new LigueRepository())->findAll();

$titrePage = "Nouvelle réservation";
require_once __DIR__ . '/../page/template/header.php';
?>

    <form method="post" action="index.php?route=nouvelle">
        <label>Date :</label><input type="date" name="date" required><br><br>
        <label>Heure de début :</label><input type="time" name="heure_debut" required><br><br>
        <label>Heure de fin :</label><input type="time" name="heure_fin" required><br><br>
        <label>Salle :</label>
        <select name="salle_id">
            <?php foreach ($salles as $salle): ?>
                <option value="<?= $salle->id ?>"><?= $salle->getNom() ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <label>Ligue :</label>
        <select name="ligue_id">
            <?php foreach ($ligues as $ligue): ?>
                <option value="<?= $ligue->id ?>"><?= $ligue->getNom() ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <button type="submit">Réserver</button>
    </form>

<?php require_once __DIR__ . '/../page/template/footer.php'; ?>