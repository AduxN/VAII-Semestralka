<?php

use App\Models\Review;
/** @var \App\Models\Review[] $data */
$review = $data;
?>

<div class="articles">
    <article>
        <h2><?=$review->getTitle()?></h2>
        <p class="review_text"><?=$review->getParagraph1()?></p>
        <p class="review_text"><?=$review->getParagraph2()?></p>
        <p class="review_text"><?=$review->getParagraph3()?></p>
        <img src="<?=$review->getImage()?>" alt="<?=$review->getImagealt()?>" class="review_img">
        <p class="review_text"><?=$review->getParagraph4()?></p>
    </article>
</div>