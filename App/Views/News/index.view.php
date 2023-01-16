<?php /* @var News[] $data */
/** @var IAuthenticator $auth */

use App\Core\IAuthenticator;
use App\Models\News;
?>

<h1>Novinky</h1>

<div class="newsTitle">
    <div class="col-3 newpostbtn">
        <?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
            <a href="?c=news&a=newPostForm" class="text-decoration-none">
                <button type="button" class="btn btn-dark">Nový príspevok</button>
            </a>
        <?php } ?>
    </div>

    <div class="col-6">
        <h2>Najaktuálnejšie informácie z herného sveta</h2>
    </div>

    <div class="col-3">
    </div>
</div>

<div class="newsArticles">
    <?php foreach (array_reverse($data) as $n) { ?>
        <article class="newsArticle">
            <h2><?=$n->getTitle()?></h2>
            <p class="news_p"><?=$n->getDescription()?></p>
            <div class="content"><?=$n->getContent()?></div>
            <br>
            <p class="news_p"><?=$n->getSummary()?></p>
            <?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
                <div class="articlebtns">
                    <a href="?c=news&a=editPostForm&id=<?=$n->getId()?>" class="btn btn-primary articlebtn">E</a>
                    <a href="?c=news&a=deletePost&id=<?=$n->getId()?>" onclick="return confirm('Príspevok bude zmazaný')" class="btn btn-danger articlebtn">X</a>
                </div>
            <?php } ?>
        </article>
    <?php } ?>
</div>