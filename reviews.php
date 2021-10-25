<?php

require __DIR__ . '/header.php';

?>
<main>
    <h1>So what do our
        customers think about our coffee?</h1>

    <p><?= getOnlyGoodReviews($reviews) ?></p>
</main>

<?php

require __DIR__ . '/footer.php';

?>
