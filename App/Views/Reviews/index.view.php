<?php /* @var \App\Models\Review[] $data */
?>
<h1>Recenzie</h1>

<div class="articles">
    <?php foreach ($data as $rev) { ?>
        <article>
            <a href="?c=reviews&a=article&id=<?=$rev->getId()?>"><h2><?=$rev->getTitle()?></h2></a>
            <img src="<?=$rev->getImage()?>" alt="<?=$rev->getImagealt()?>" class="review_img">
            <p class="review_text"><?=$rev->getDescription()?></p>
        </article>
    <?php } ?>
</div>
<div class="newreviewbtn">
    <a href="?c=reviews&a=newArticleForm">
        <button type="button" class="btn btn-primary">Nová recenzia</button>
    </a>
</div>
