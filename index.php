<?php

require __DIR__ . '/header.php';

?>

<main>
    <section class="coffeeChoice">
        <h2>Don't know what coffee to get?</h2>
        <p> Press the button below and we will select one for you!</p>

        <div class='button'><button onClick="window.location.reload();">Select Coffee</button></div>
        <?php $randIndex = getRandomIndex($filters) ?>
        <p><?= $filters[$randIndex]['name'] ?></p>
        <img src="<?= $filters[$randIndex]['image'] ?>" alt="<?= $filters[$randIndex]['alt'] ?>">
    </section>
</main>


<?php

require __DIR__ . '/footer.php';

?>
