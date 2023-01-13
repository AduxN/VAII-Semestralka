<?php /* @var \App\Models\Review[] $data */
?>
<h1>Recenzie</h1>

<div class="searchInput">
    <input type="text" id="searchInput" class="form-control" name="searchInput" placeholder="Nájdi recenziu"/>
</div>

<div class="closedArticles">
    <?php foreach ($data as $rev) { ?>
        <article class="closedArticle">
            <div class="review_title_div">
                <a class="review_title" href="?c=reviews&a=article&id=<?=$rev->getId()?>">
                    <h2 class="review_title" ><?=$rev->getTitle()?></h2>
                </a>
            </div>

            <img src="<?=$rev->getImageSrc()?>" alt="<?=$rev->getImageAlt()?>" class="review_img">
            <p class="review_text"><?=$rev->getDescription()?></p>
        </article>
    <?php } ?>
</div>
<div class="newreviewbtn">
    <a href="?c=reviews&a=newArticleForm">
        <button type="button" class="btn btn-primary">Nová recenzia</button>
    </a>
</div>
