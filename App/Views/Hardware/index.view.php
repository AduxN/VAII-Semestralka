<?php /* @var Hardware[] $data */
/** @var IAuthenticator $auth */

use App\Core\IAuthenticator;
use App\Models\Hardware;

?>
    <h1>Hardvér</h1>

    <div class="searchInput">
        <input type="text" id="searchInput" class="form-control" name="searchInput" placeholder="Nájdi článok" onkeyup="getArticles(this.value, false)"/>
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
<?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
    <div class="newhwbtn">
        <a href="?c=hardware&a=newArticleForm">
            <button type="button" class="btn btn-primary">Nový článok</button>
        </a>
    </div>
<?php } ?>