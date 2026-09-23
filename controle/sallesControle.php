<?php

declare(strict_types=1);

require_once __DIR__ . '/../data/SalleRepository.php';

$repository = new SalleRepository();
$salles = $repository->findAll();

$titrePage = "Salles disponibles";
require_once __DIR__ . '/../page/template/header.php';
?>

    <ul>
        <?php foreach ($salles as $salle): ?>
            <li><?= $salle->getNom() ?> — capacité : <?= $salle->getCapacite() ?></li>
        <?php endforeach; ?>
    </ul>

<?php require_once __DIR__ . '/../page/template/footer.php'; ?>