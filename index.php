<?php

require __DIR__ . '/header.php';

?>

<main>
    <div class='head2-text'>
        <h2>What kind off coffe do you want?</h2>
    </div>
    <div class='main-text'>
        <p> Press the button below and we will select one for you!</p>
    </div>
    <div class='button'><button onClick="window.location.reload();">Select Coffee</button></div>
    <?php $randIndex = getRandomIndex($filters) ?>
    <div class='coffee-choice'>
        <p><?= $filters[$randIndex]['name'] ?></p>
        <img src="<?= $filters[$randIndex]['image'] ?>" alt="the label on coffee">
    </div>
</main>


<?php

require __DIR__ . '/footer.php';

?>
