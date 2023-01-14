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
                    <li class="specialoffer"><a href="<?=$o->getLink()?>" target="_blank"><?=$o->getTitle()?></a></li>
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
                <li class="offer"><a href="<?=$o->getLink()?>" target="_blank"><?=$o->getTitle()?></a></li>
            <?php } ?>
        <?php } ?>
    </ul>
</div>
