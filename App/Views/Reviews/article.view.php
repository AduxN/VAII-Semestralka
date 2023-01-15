<?php

use App\Core\IAuthenticator;
use App\Models\Review;
/** @var Review $data */
/** @var IAuthenticator $auth */
$review = $data;
?>

<div class="openArticles">
    <article class="openArticle">
        <div class="articleTitle">
            <input class="fa fa-backward backarrow" type="button" value="&#xf104;" onclick="history.back()">
            <h2 class="openedTitle"><?=$review->getTitle()?></h2>
        </div>


        <p class="review_text"><?=$review->getParagraph1()?></p>
        <p class="review_text"><?=$review->getParagraph2()?></p>
        <p class="review_text"><?=$review->getParagraph3()?></p>
        <img src="<?=$review->getImageSrc()?>" alt="<?=$review->getImageAlt()?>" class="review_img">
        <p class="review_text"><?=$review->getParagraph4()?></p>
        <?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
            <div class="articlebtns">
                <a href="?c=reviews&a=editArticleForm&id=<?=$review->getId()?>" class="btn btn-primary articlebtn">E</a>
                <a href="?c=reviews&a=deleteArticle&id=<?=$review->getId()?>" onclick="return confirm('Recenzia bude zmazaná')" class="btn btn-danger articlebtn">X</a>
            </div>
        <?php } ?>
    </article>
</div>