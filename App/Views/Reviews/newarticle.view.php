<?php
use App\Models\Review;
/** @var Review $data */
$review = $data;
?>

<form method="post" action="?c=reviews&a=newArticle">
    <!-- Title input -->
    <div class="form-outline mb-4">
        <input type="text" id="formTitle" class="form-control" name="title"/>
        <label class="form-label" for="formTitle">Názov</label>
    </div>

    <!-- Description input -->
    <div class="form-outline mb-4">
        <input type="text" id="formDescription" class="form-control" name="description"/>
        <label class="form-label" for="formDescription">Popis</label>
    </div>

    <!-- Paragraph1 input -->
    <div class="form-outline mb-4">
        <input type="text" id="formParagraph1" class="form-control" name="paragraph1"/>
        <label class="form-label" for="formParagraph1">Paragraf 1</label>
    </div>

    <!-- Paragraph2 input -->
    <div class="form-outline mb-4">
        <input type="text" id="formParagraph2" class="form-control" name="paragraph2"/>
        <label class="form-label" for="formParagraph2">Paragraf 2</label>
    </div>

    <!-- Paragraph3 input -->
    <div class="form-outline mb-4">
        <input type="text" id="formParagraph3" class="form-control" name="paragraph3"/>
        <label class="form-label" for="formParagraph3">Paragraf 3</label>
    </div>

    <!-- Paragraph4 input -->
    <div class="form-outline mb-4">
        <input type="text" id="formParagraph4" class="form-control" name="paragraph4"/>
        <label class="form-label" for="formParagraph4">Paragraf 4</label>
    </div>

    <!-- Image input -->
    <div class="form-outline mb-4">
        <input type="text" id="formImage" class="form-control" name="image"/>
        <label class="form-label" for="formImage">Cesta k obrázku</label>
    </div>

    <!-- Imagealt input -->
    <div class="form-outline mb-4">
        <input type="text" id="formImagealt" class="form-control" name="imagealt"/>
        <label class="form-label" for="formImagealt">Alternatívny text (ak sa obrázok nezobrazí správne)</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Vytvor recenziu</button>
</form>

