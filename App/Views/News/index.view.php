<?php /* @var News[] $data */
/** @var IAuthenticator $auth */

use App\Core\IAuthenticator;
use App\Models\News;

?>
<h1>Novinky</h1>
<h2 class="newsTitle">Najaktuálnejšie informácie z herného sveta</h2>
<div class="newsArticles">
    <?php foreach (array_reverse($data) as $n) { ?>
    <article class="closedArticle">
        <h2><?=$n->getTitle()?></h2>
        <p class="news_p"><?=$n->getDescription()?></p>
        <div class="content"><?=$n->getContent()?></div>
        <p class="news_p"><?=$n->getSummary()?></p>
        <?php if ($auth->isLogged()) { ?>
            <div class="articlebtns">
                <a href="?c=news&a=editPostForm&id=<?=$n->getId()?>" class="btn btn-primary articlebtn">E</a>
                <a href="?c=news&a=deletePost&id=<?=$n->getId()?>" onclick="return confirm('Príspevok bude zmazaný')" class="btn btn-danger articlebtn">X</a>
            </div>
        <?php } ?>
    </article>
    <?php } ?>
</div>
<?php if ($auth->isLogged()) { ?>
<div class="newreviewbtn">
    <a href="?c=news&a=newPostForm">
        <button type="button" class="btn btn-primary">Nový príspevok</button>
    </a>
</div>
<?php } ?>