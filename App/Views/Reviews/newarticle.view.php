<?php
use App\Models\Review;
/** @var Review $data */
$post = $data;
?>
<input class="fa fa-backward backarrow" type="button" value="&#xf104;" onclick="history.back()">

<form class="newarticleForm form rounded-lg" name="newarticleform" method="post" action="?c=reviews&a=newArticle" onsubmit="return validateArticle()">
    <?php if ($post->getId()) { ?>
        <input type="hidden" name="id" value="<?=$post->getId() ?>">
    <?php } ?>
    <h3>Recenzia</h3>
    <!-- Title input -->
    <div class="form-outline mb-4">
        <input type="text" id="formTitle" class="form-control" name="title" value="<?=$post->getTitle()?>"/>
        <label class="form-label" for="formTitle">Názov</label>
    </div>

    <!-- Description input -->
    <div class="form-outline mb-4">
        <textarea class="form-control" id="formDescription" rows="2" name="description"><?=$post->getDescription()?></textarea>
        <label class="form-label" for="formDescription">Popis</label>
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

    <!-- Paragraph3 input -->
    <div class="form-outline mb-4">
        <textarea class="form-control" id="formParagraph3" rows="3" name="paragraph3"><?=$post->getParagraph3()?></textarea>
        <label class="form-label" for="formParagraph3">Paragraf 3</label>
    </div>

    <!-- Paragraph4 input -->
    <div class="form-outline mb-4">
        <textarea class="form-control" id="formParagraph4" rows="3" name="paragraph4"><?=$post->getParagraph4()?></textarea>
        <label class="form-label" for="formParagraph4">Paragraf 4</label>
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
    <button type="submit" class="btn btn-primary btn-block mb-4">Ulož recenziu</button>
</form>

