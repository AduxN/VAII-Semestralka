<?php /* @var Hardware[] $data */
/** @var IAuthenticator $auth */

use App\Core\IAuthenticator;
use App\Models\Hardware;

?>
    <h1>Hardvér</h1>

<div class="gap-2 searchInput">
    <div class="col-3 newhwbtn">
        <?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
            <a href="?c=hardware&a=newArticleForm" class="text-decoration-none">
                <button type="button" class="btn btn-dark">Nový článok</button>
            </a>
        <?php } ?>
    </div>

    <div class="col-6">
        <input type="text" id="searchInput" class="form-control sInput" name="searchInput" placeholder="Nájdi článok" onkeyup="filterArticles(this.value, false)"/>
        <label for="searchInput" hidden></label>
    </div>

    <div class="col-3 gap-2 sortbtns">
        <button class="btn btn-dark" onclick="sortArticles(true, false)"><i class="fa fa-sort-alpha-asc"></i></button>
        <button class="btn btn-dark" onclick="sortArticles(false, false)"><i class="fa fa-sort-alpha-desc"></i></button>
        <button class="btn btn-dark" onclick="getArticles(false)"><i class="fa fa-arrows-v"></i></button>

    </div>
</div>
    <div class="closedArticles" id="closedHW">
        <?php foreach (array_reverse($data) as $hw) { ?>
            <article class="closedArticle">
                <div class="hw_title_div">
                    <a class="hw_title" href="?c=hardware&a=article&id=<?=$hw->getId()?>">
                        <h2 class="hw_title" ><?=$hw->getTitle()?></h2>
                    </a>
                </div>

                <img src="<?=$hw->getImageSrc()?>" alt="<?=$hw->getImageAlt()?>" class="hw_img">
                <p class="hw_text"><?=$hw->getDescription()?></p>
            </article>
        <?php } ?>
    </div>
