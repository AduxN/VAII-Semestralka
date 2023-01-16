<?php /* @var Review[] $data */
/** @var IAuthenticator $auth */

use App\Core\IAuthenticator;
use App\Models\Review;
?>

<h1>Recenzie</h1>

<div class="gap-2 searchInput">
    <div class="col-3 newreviewbtn">
        <?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
            <a href="?c=reviews&a=newArticleForm" class="text-decoration-none">
                <button type="button" class="btn btn-dark ">Nová recenzia</button>
            </a>
        <?php } ?>
    </div>

    <div class="col-6">
        <input type="text" id="searchInput" class="form-control" name="searchInput" placeholder="Nájdi recenziu" onkeyup="filterArticles(this.value, true)"/>
        <label for="searchInput" hidden></label>
    </div>

    <div class="col-3 gap-2 sortbtns">
        <button class="btn btn-dark" onclick="sortArticles(true, true)"><i class="fa fa-sort-alpha-asc"></i></button>
        <button class="btn btn-dark" onclick="sortArticles(false, true)"><i class="fa fa-sort-alpha-desc"></i></button>
        <button class="btn btn-dark" onclick="getArticles(true)"><i class="fa fa-arrows-v"></i></button>

    </div>
</div>

<div class="closedArticles" id="closedReviews">
    <?php foreach (array_reverse($data) as $rev) { ?>
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
