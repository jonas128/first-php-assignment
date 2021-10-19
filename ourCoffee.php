<?php

require __DIR__ . '/header.php';

?>
<main>
    <h1>This is all of our filter coffee</h1>
    <?php foreach ($filters as $filter) :
        foreach ($filter as $label => $info) : ?>
            <p><?= "$label: $info"  ?></p>
    <?php endforeach;
    endforeach ?>

</main>

<?php

require __DIR__ . '/footer.php';

?>
