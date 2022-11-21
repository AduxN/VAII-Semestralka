<?php
$layout = 'auth';
/** @var Array $data */
?>
<form class="signInForm form rounded-lg">
    <h3>Registrácia</h3>
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

    <!-- Password check input -->
    <div class="form-outline mb-4">
        <input type="password" id="formPassCheck" class="form-control" />
        <label class="form-label" for="formPassCheck">Kontrola hesla</label>
    </div>

    <!-- Name input -->
    <div class="form-outline mb-4">
        <input type="text" id="formName" class="form-control" />
        <label class="form-label" for="formName">Meno</label>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" id="formEmail" class="form-control" />
        <label class="form-label" for="formEmail">Email</label>
    </div>

    <!-- Submit button -->
    <button type="button" class="btn btn-primary btn-block mb-4">Registruj sa</button>
</form>