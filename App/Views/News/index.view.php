<?php /* @var \App\Models\News[] $data */
?>
<h1>Novinky</h1>

<div class="newsArticles">
    <?php foreach ($data as $n) { ?>
    <article class="newsArticle">
        <h2><?=$n->getTitle()?></h2>
        <p class="news_p"><?=$n->getDescription()?></p>
        <div class="content"><?=$n->getContent()?></div>
        <p class="news_p"><?=$n->getSummary()?></p>
    </article>
    <?php } ?>
</div>
