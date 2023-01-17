<?php

use App\Models\Hardware;
/** @var Hardware $data */
$post = $data;
?>
<input class="fa fa-backward formarrow" type="button" value="&#xf104;" onclick="history.back()">

<form class="newarticleForm form rounded-lg" name="newarticleform" method="post" action="?c=hardware&a=newArticle" onsubmit="return validateHW()">
    <?php if ($post->getId()) { ?>
        <input type="hidden" name="id" value="<?=$post->getId() ?>">
    <?php } ?>
    <h3>Článok</h3>
    <!-- Title input -->
    <div class="form-outline mb-4">
        <input type="text" id="formTitle" class="form-control" name="title" value="<?=$post->getTitle()?>"/>
        <label class="form-label" for="formTitle">Názov *</label>
    </div>

    <!-- Description input -->
    <div class="form-outline mb-4">
        <textarea class="form-control" id="formDescription" rows="2" name="description"><?=$post->getDescription()?></textarea>
        <label class="form-label" for="formDescription">Popis *</label>
    </div>

    <!-- Paragraph1 input -->
    <div class="form-outline mb-4">
        <textarea class="form-control" id="formParagraph1" rows="3" name="paragraph1"><?=$post->getParagraph1()?></textarea>
        <label class="form-label" for="formParagraph1">Paragraf 1</label>
    </div>

    <!-- Paragraph2 input -->
    <div class="form-outline mb-4">
        <textarea class="form-control" id="formParagraph2" rows="3" name="paragraph2"><?=$post->getParagraph2()?></textarea>
        <label class="form-label" for="formParagraph2">Paragraf 2</label>
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
    <button type="submit" class="submitbtn btn btn-primary btn-block mb-4">Ulož článok</button>
</form>

