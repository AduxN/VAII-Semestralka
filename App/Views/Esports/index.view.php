<?php /* @var Esport[] $data */
/** @var IAuthenticator $auth */

use App\Core\IAuthenticator;
use App\Models\Esport;
?>

<h1>eSports</h1>

<div class="esportsTitle">
    <div class="col-3 newesportbtn">
        <?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
            <a href="?c=esports&a=newPostForm" class="text-decoration-none">
                <button type="button" class="btn btn-dark">Nový príspevok</button>
            </a>
        <?php } ?>
    </div>

    <div class="col-6">
        <h2>Najnovšie správy zo sveta e-športu</h2>
    </div>

    <div class="col-3">
    </div>
</div>

<div class="esportsArticles">
    <?php foreach (array_reverse($data) as $e) { ?>
        <article class="esportsArticle">
            <h2><?=$e->getTitle()?></h2>
            <img src="<?=$e->getImageSrc()?>" alt="<?=$e->getImageAlt()?>" class="esports_img">
            <br>
            <br>
            <p class="esports_p"><?=$e->getText()?></p>
            <?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
                <div class="articlebtns">
                    <a href="?c=esports&a=editPostForm&id=<?=$e->getId()?>" class="btn btn-primary articlebtn">E</a>
                    <a href="?c=esports&a=deletePost&id=<?=$e->getId()?>" onclick="return confirm('Príspevok bude zmazaný')" class="btn btn-danger articlebtn">X</a>
                </div>
            <?php } ?>
        </article>
    <?php } ?>
</div>