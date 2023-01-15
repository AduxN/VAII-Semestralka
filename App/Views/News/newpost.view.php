<?php
use App\Models\News;
/** @var News $data */
$post = $data;
?>

<form class="newarticleForm form rounded-lg" name="newpostform" method="post" action="?c=news&a=newPost" onsubmit="return validatePost()">
    <?php if ($post->getId()) { ?>
        <input type="hidden" name="id" value="<?=$post->getId() ?>">
    <?php } ?>
    <h3>Príspevok</h3>
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

    <!-- Summary input -->
    <div class="form-outline mb-4">
        <textarea class="form-control" id="formSummary" rows="2" name="summary"><?=$post->getSummary()?></textarea>
        <label class="form-label" for="formSummary">Zhrnutie</label>
    </div>

    <!-- Content input -->
    <div class="form-outline mb-4">
        <textarea id="formContent" class="form-control" rows="3" name="content"><?=$post->getContent()?></textarea>
        <label class="form-label" for="formContent">Obsah</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Ulož príspevok</button>
</form>

