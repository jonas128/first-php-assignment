<?php

require __DIR__ . '/header.php';

?>
<main>
    <h1>This is all of our filter coffee</h1>
    <div class='container'>
        <?php foreach ($filters as $filter) : ?>
            <div class='text-container'>
                <?php foreach ($filter as $label => $info) :
                    if ($label !== 'image') : ?>
                        <p><?= "$label: $info"  ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="picture-container">
                <img src="<?= $filter['image'] ?>">
            </div>
        <?php endforeach ?>
    </div>

</main>

<?php

require __DIR__ . '/footer.php';

?>
