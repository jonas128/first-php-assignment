<?php

require __DIR__ . '/header.php';

?>
<main>
    <h1>This is all of our filter coffee</h1>
    <div class='container'>
        <?php foreach ($filters as $filter) : ?>

            <?php foreach ($filter as $label => $info) :
                if ($label !== 'image') : ?>
                    <p><?= "$label: $info"  ?></p>
                <?php endif; ?>
            <?php endforeach; ?>

            <img src="<?= $filter['image'] ?>">

        <?php endforeach ?>
    </div>

</main>

<?php

require __DIR__ . '/footer.php';

?>
