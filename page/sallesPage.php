<?php require_once __DIR__ . '/template/header.php'; ?>

    <ul>
        <?php foreach ($salles as $salle): ?>
            <li><?= $salle->getNom() ?> — capacité : <?= $salle->getCapacite() ?></li>
        <?php endforeach; ?>
    </ul>

<?php require_once __DIR__ . '/template/footer.php'; ?>