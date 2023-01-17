<?php
use App\Models\Offer;
/** @var Offer $data */
$offer = $data;
?>
<input class="fa fa-backward formarrow" type="button" value="&#xf104;" onclick="history.back()">

<form class="newarticleForm form rounded-lg" name="newofferform" method="post" action="?c=offers&a=newOffer" onsubmit="return validateOffer()">
    <h3>Ponuka</h3>
    <!-- Title input -->
    <div class="form-outline mb-4">
        <input type="text" id="formTitle" class="form-control" name="title"/>
        <label class="form-label" for="formTitle">Názov *</label>
    </div>

    <!-- Link input -->
    <div class="form-outline mb-4">
        <textarea class="form-control" id="formLink" rows="2" name="link"></textarea>
        <label class="form-label" for="formLink">Link *</label>
    </div>

    <!-- Special input -->
    <div class="form-outline mb-4">
<!--        <input type="hidden" name="special" value="0" />-->
        <input type="checkbox" id="formSpecial" name="special" value="1">
        <label class="form-label" for="formSpecial">Len pre prihlásených používateľov</label>
    </div>


    <!-- Submit button -->
    <button type="submit" class="submitbtn btn btn-primary btn-block mb-4">Ulož ponuku</button>
</form>
