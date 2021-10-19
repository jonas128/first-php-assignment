<?php

require __DIR__ . '/header.php';

?>

<main>
    <h2>What kind off coffe do you want?</h2>
    <p> Press the button below and we will select one for you!</p>
    <button onClick="window.location.reload();">Select Coffee</button>
    <?php $randIndex = getRandomIndex($filters) ?>
    <img src="<?= $filters[$randIndex]['image'] ?>">
    <p><?= $filters[$randIndex]['name'] ?></p>
</main>


<?php

require __DIR__ . '/footer.php';

?>
