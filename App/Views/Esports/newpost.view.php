<?php
use App\Models\Esport;
/** @var Esport $data */
$post = $data;
?>
<input class="fa fa-backward formarrow" type="button" value="&#xf104;" onclick="history.back()">

<form class="newarticleForm form rounded-lg" name="newesportform" method="post" action="?c=esports&a=newPost" onsubmit="return validateEsport()">
    <?php if ($post->getId()) { ?>
        <input type="hidden" name="id" value="<?=$post->getId() ?>">
    <?php } ?>
    <h3>Príspevok</h3>
    <!-- Title input -->
    <div class="form-outline mb-4">
        <input type="text" id="formTitle" class="form-control" name="title" value="<?=$post->getTitle()?>"/>
        <label class="form-label" for="formTitle">Názov *</label>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
        <textarea class="form-control" id="formText" rows="5" name="text"><?=$post->getText()?></textarea>
        <label class="form-label" for="formText">Text</label>
    </div>

    <!-- Image input -->
    <div class="form-outline mb-4">
        <input type="text" id="formImageSrc" class="form-control" name="imageSrc" value="<?=$post->getImageSrc()?>"/>
        <label class="form-label" for="formImageSrc">Cesta k obrázku</label>
    </div>

    <!-- Imagealt input -->
    <div class="form-outline mb-4">
        <input type="text" id="formImageAlt" class="form-control" name="imageAlt" value="<?=$post->getImageAlt()?>"/>
        <label class="form-label" for="formImageAlt">Alternatívny text (ak sa obrázok nezobrazí správne)</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="submitbtn btn btn-primary btn-block mb-4">Ulož príspevok</button>
</form>