<?php

require __DIR__ . '/header.php';

$goodReviews = getOnlyGoodReviews($reviews);

?>
<main>
    <h1>So what do our customers think of our coffee?</h1>
    <ul>
        <?php foreach ($goodReviews as $goodReview) : ?>
            <li class="goodReviews"><?= $goodReview ?></li>
        <?php endforeach; ?>
    </ul>
</main>

<?php

require __DIR__ . '/footer.php';

?>
