<?php /* @var Offer[] $data */
/** @var IAuthenticator $auth */

use App\Core\IAuthenticator;
use App\Models\Offer;

?>
<h1>Špeciálne ponuky</h1>
<h2 class="offersTitle">Aktuálne ponuky a zľavy na vaše obľúbené hry, na jednom mieste</h2>
<?php if ($auth->isLogged()) { ?>
    <div>
        <h3 class="offersText">Špeciálne ponuky len pre prihlásených používateľov</h3>
        <ul class="specialoffers">
            <?php foreach ($data as $o) { ?>
                <?php if ($o->isSpecial()) { ?>
                    <li class="specialoffer">
                        <a href="<?=$o->getLink()?>" target="_blank" class="offerlink"><?=$o->getTitle()?></a>
                        <?php if ($auth->getLoggedUserId() == 10) { ?>
                            <a href="?c=offers&a=deleteOffer&id=<?=$o->getId()?>" onclick="return confirm('Ponuka bude zmazaná')" class="btn btn-danger specialofferbtn offerbtn">X</a>
                        <?php } ?>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
<?php } ?>

<div>
    <?php if ($auth->isLogged()) { ?>
        <h3 class="offersText">Ostatné ponuky</h3>
    <?php } ?>
    <ul class="offers">
        <?php foreach ($data as $o) { ?>
            <?php if (!$o->isSpecial()) { ?>
                <li class="offer">
                    <a href="<?=$o->getLink()?>" target="_blank" class="offerlink"><?=$o->getTitle()?></a>
                    <?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
                        <a href="?c=offers&a=deleteOffer&id=<?=$o->getId()?>" onclick="return confirm('Ponuka bude zmazaná')" class="btn btn-danger normalofferbtn offerbtn">X</a>
                    <?php } ?>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
</div>
<?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
    <div class="newofferbtn">
        <a href="?c=offers&a=newOfferForm">
            <button type="button" class="btn btn-primary">Nová ponuka</button>
        </a>
    </div>
<?php } ?>
