<?php

use App\Core\IAuthenticator;
use App\Models\Hardware;

/** @var Hardware $data */
/** @var IAuthenticator $auth */
$hw = $data;
?>

<div class="openArticles">
    <article class="openArticle">
        <h2><?=$hw->getTitle()?></h2>
        <p class="hw_text"><?=$hw->getParagraph1()?></p>

        <img src="<?=$hw->getImageSrc()?>" alt="<?=$hw->getImageAlt()?>" class="hw_img">
        <p class="hw_text"><?=$hw->getParagraph2()?></p>
        <?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
            <div class="articlebtns">
                <a href="?c=hardware&a=editArticleForm&id=<?=$hw->getId()?>" class="btn btn-primary articlebtn">E</a>
                <a href="?c=hardware&a=deleteArticle&id=<?=$hw->getId()?>" onclick="return confirm('Článok bude zmazaný')" class="btn btn-danger articlebtn">X</a>
            </div>
        <?php } ?>
    </article>
</div>