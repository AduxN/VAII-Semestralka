<?php /** @var \App\Core\IAuthenticator $auth */ ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div>
                Vitaj, <strong><?= $auth->getLoggedUserName() ?></strong>!<br><br>
            </div>
            <?php if ($auth->isLogged() && $auth->getLoggedUserId() == 10) { ?>
                <div>
                    <strong>Admin práva povolené.</strong>
                </div>
            <?php } ?>
        </div>
    </div>
</div>