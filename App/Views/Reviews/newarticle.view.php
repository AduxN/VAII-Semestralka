<?php
use App\Models\Review;
/** @var Review $data */
$review = $data;
?>

<form id="newarticleform" name="newarticleform" method="post" action="?c=reviews&a=newArticle" onsubmit="return validateArticle()">
    <?php if ($review->getId()) { ?>
        <input type="hidden" name="id" value="<?=$review->getId() ?>">
    <?php } ?>
    <!-- Title input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="formTitle">Názov</label>
        <input type="text" id="formTitle" class="form-control" name="title" value="<?=$review->getTitle()?>"/>
    </div>

    <!-- Description input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="formDescription">Popis</label>
        <textarea class="form-control" id="formDescription" rows="2" name="description"><?=$review->getDescription()?></textarea>
    </div>

    <!-- Paragraph1 input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="formParagraph1">Paragraf 1</label>
        <textarea class="form-control" id="formParagraph1" rows="3" name="paragraph1"><?=$review->getParagraph1()?></textarea>
    </div>

    <!-- Paragraph2 input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="formParagraph2">Paragraf 2</label>
        <textarea class="form-control" id="formParagraph2" rows="3" name="paragraph2"><?=$review->getParagraph2()?></textarea>
    </div>

    <!-- Paragraph3 input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="formParagraph3">Paragraf 3</label>
        <textarea class="form-control" id="formParagraph3" rows="3" name="paragraph3"><?=$review->getParagraph3()?></textarea>
    </div>

    <!-- Paragraph4 input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="formParagraph4">Paragraf 4</label>
        <textarea class="form-control" id="formParagraph4" rows="3" name="paragraph4"><?=$review->getParagraph4()?></textarea>
    </div>

    <!-- Image input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="formImageSrc">Cesta k obrázku</label>
        <input type="text" id="formImageSrc" class="form-control" name="imageSrc" value="<?=$review->getImageSrc()?>"/>
    </div>

    <!-- Imagealt input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="formImageAlt">Alternatívny text (ak sa obrázok nezobrazí správne)</label>
        <input type="text" id="formImageAlt" class="form-control" name="imageAlt" value="<?=$review->getImageAlt()?>"/>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Ulož recenziu</button>
</form>

