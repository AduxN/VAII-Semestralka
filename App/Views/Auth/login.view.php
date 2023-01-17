<?php
$layout = 'auth';
/** @var Array $data */
?>
<input class="fa fa-backward formarrow" type="button" value="&#xf104;" onclick="history.back()">
<div class="login">
    <form class="loginForm form rounded-lg" method="post" action="<?= \App\Config\Configuration::LOGIN_URL ?>">
        <div class="text-center text-danger mb-3">
            <?= @$data['error'] ?>
        </div>

        <h3>Prihlásenie</h3>
        <!-- Login input -->
        <div class="form-outline mb-4">
            <input name="login" type="text" id="formLogin" class="form-control" />
            <label class="form-label" for="formLogin">Prihlasovacie meno</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input name="password" type="password" id="formPassword" class="form-control" />
            <label class="form-label" for="formPassword">Heslo</label>
        </div>

        <!-- Submit button -->
        <button type="submit" name="submit" class="submitbtn btn btn-primary btn-block mb-4" >Prihlás sa</button>
    </form>
</div>