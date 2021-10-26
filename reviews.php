<?php

require __DIR__ . '/header.php';

?>
<main>
    <h1>So what do our
        customers think about our coffee?</h1>

    <?php $goodReviews = getOnlyGoodReviews($reviews);
    foreach ($goodReviews as $goodReview) {
        echo "$goodReview \n ";
    } ?>
</main>

<?php

require __DIR__ . '/footer.php';

?>
