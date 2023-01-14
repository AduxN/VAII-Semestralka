<?php
/** @var string $contentHTML */
/** @var IAuthenticator $auth */

use App\Core\IAuthenticator;

?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link rel="icon" type="image/png" href="public/images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0;" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=latin-ext">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/menus.css">
    <script src="public/js/script.js"></script>
</head>
<body onresize="resizeRefresh()">
<nav>
    <div class="menu">
        <div class="defaultmenu">
            <a href="?c=home" class="item home_menu active"><img class="logo_img" src="public/images/logo.png" alt="GameCommunity"></a>
            <div class="links" id="links">
                <a href="?c=news" class="item">Novinky</a>
                <a href="?c=reviews" class="item">Recenzie</a>
                <a href="?c=offers" class="item">Špeciálne ponuky</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="hamburgerMenu()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="btns" id="btns">
            <?php if ($auth->isLogged()) { ?>
                <h3 class="username"><?= $auth->getLoggedUserName() ?></h3>
                <a href="?c=auth&a=logout" class="btna"><button type="button" class="btn btn-primary logoutbtn">Odhlás sa</button></a>
            <?php } else { ?>
                <a href="?c=auth&a=login" class="btna"><button type="button" class="btn btn-primary loginbtn">Prihlás sa</button></a>
                <a href="?c=auth&a=signInForm" class="btna"><button type="button" class="btn btn-primary signinbtn">Registruj sa</button></a>
            <?php } ?>
        </div>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
<footer>
    <hr>
    <div class="footer_text">
        <p class="left">
            Všetky práva vyhradené.
        </p>
        <p class="right">
            © 2022 GameCommunity - nagy1@stud.uniza.sk
        </p>
    </div>
</footer>
</body>
</html>
