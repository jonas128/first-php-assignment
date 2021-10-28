<?php

require __DIR__ . '/header.php';

$goodReviews = getOnlyGoodReviews($reviews);

?>
<main>
    <h2>So what do our customers think of our coffee?</h2>
    <ul>
        <?php foreach ($goodReviews as $goodReview) : ?>
            <li class="goodReview"><?= $goodReview ?></li>
        <?php endforeach; ?>
    </ul>
</main>

<?php

require __DIR__ . '/footer.php';

?>
