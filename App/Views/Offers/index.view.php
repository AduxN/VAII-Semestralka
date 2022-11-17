<?php /* @var \App\Models\Offer[] $data */
?>
<h1>Špeciálne ponuky</h1>
<h2 class="offersTitle">Aktuálne ponuky a zľavy na vaše obľúbené hry, na jednom mieste</h2>
<div>
    <ul class="offers">
        <?php foreach ($data as $o) { ?>
            <li class="offer"><a href="<?=$o->getLink()?>"><?=$o->getTitle()?></a></li>
        <?php } ?>
    </ul>
</div>
