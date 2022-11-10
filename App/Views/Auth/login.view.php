<?php
$layout = 'auth';
/** @var Array $data */
?>
<form class="loginForm">
    <!-- Login input -->
    <div class="form-outline mb-4">
        <input type="text" id="formLogin" class="form-control" />
        <label class="form-label" for="formLogin">Prihlasovacie meno</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="formPassword" class="form-control" />
        <label class="form-label" for="formPassword">Heslo</label>
    </div>

    <!-- Submit button -->
    <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
</form>
