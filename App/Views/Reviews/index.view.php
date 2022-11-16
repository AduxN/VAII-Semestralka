<?php /* @var \App\Models\Review[] $data */
?>
<h1>Recenzie</h1>

<div class="articles">
    <?php foreach ($data as $rev) { ?>
        <article>
            <h2><?=$rev->getTitle()?></h2>
            <p class="review_text"><?=$rev->getParagraph1()?></p>
            <p class="review_text"><?=$rev->getParagraph2()?></p>
            <p class="review_text"><?=$rev->getParagraph3()?></p>
            <img src="<?=$rev->getImage()?>" alt="<?=$rev->getImagealt()?>" class="review_img">
            <p class="review_text"><?=$rev->getParagraph4()?></p>
        </article>
    <?php } ?>
</div>