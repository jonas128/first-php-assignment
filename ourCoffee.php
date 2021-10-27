<?php

require __DIR__ . '/header.php';

?>
<main>
    <h1>This is all of our filter coffee</h1>
    <div class='allFilterCoffee'>
        <?php foreach ($filters as $filter) : ?>
            <p>Name: <?= $filter['name'] ?></p>
            <p>Variety: <?= $filter['variety'] ?></p>
            <p>Process: <?= $filter['process'] ?></p>
            <p>Altitude: <?= $filter['altitude'] ?></p>
            <p>Harvested: <?= $filter['harvested'] ?></p>
            <p>Test notes: <?= $filter['testNotes'] ?></p>
            <p>Price: <?= $filter['price'] ?></p>
            <img src="<?= $filter['image'] ?>" alt="<?= $filter['alt'] ?>">
        <?php endforeach; ?>
    </div>

</main>

<?php

require __DIR__ . '/footer.php';

?>
