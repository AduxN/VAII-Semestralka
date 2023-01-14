<?php

use App\Models\Account;

$layout = 'auth';
/** @var Account[] $data */
?>

<form class="signInForm form rounded-lg" method="post" action="?c=auth&a=signIn">
    <h3>Registrácia</h3>

    <!-- Login input -->
    <div class="form-outline mb-4">
        <input type="text" id="formLogin" class="form-control" name="login" />
        <label class="form-label" for="formLogin">Prihlasovacie meno</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="formPassword" class="form-control" name="password" />
        <label class="form-label" for="formPassword">Heslo</label>
    </div>

    <!-- Password check input -->
    <div class="form-outline mb-4">
        <input type="password" id="formPassCheck" class="form-control" name="password" />
        <label class="form-label" for="formPassCheck">Kontrola hesla</label>
    </div>

    <!-- Name input -->
    <div class="form-outline mb-4">
        <input type="text" id="formName" class="form-control" name="name" />
        <label class="form-label" for="formName">Meno</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" id="formEmail" class="form-control" name="email" />
        <label class="form-label" for="formEmail">Email</label>
    </div>

    <!-- Submit button -->
    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Registruj sa</button>

    <!-- Error check -->
    <?php
    //if ($data['error'] != "") { ?>
        <div>
            <?php //=$data['error'] ?>
        </div>
    <?php //} ?>

    <?php //if (isset($data->error)) { ?>
        <?php //if ($data['error'] != "") { ?>
            <div>
                <?php //= $data['error'] ?>
            </div>
        <?php //} ?>
    <?php //} ?>

    <div>
        <?php foreach ($data as $err) { ?>
            <?=$err?>
        <?php } ?>
    </div>
</form>