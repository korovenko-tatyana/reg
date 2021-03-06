<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/registration/src/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Playfair+Display&family=Yusei+Magic&display=swap" rel="stylesheet">
    <title>Eines Abends | Tests - Login</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <a class="header__link" href="/reg/public">
                    Eines Abends
                </a>
            </div>
            <nav class="nav">
                <?php
                $loginFromCookie = $_COOKIE['nickname'] ?? '';
                if ($loginFromCookie === ''): ?>
                    <a class="nav__link" href="/reg/public/login">Log in</a>
                    <a class="nav__link" href="/reg/public/register">Sign in</a>
                    <a class="nav__link" href="/reg/public/users">All users</a>
                <?php else: ?>
                    <a class="nav__link" href="/reg/public/profile/<?= $loginFromCookie?>">Hi, <span class="nick__weight"><?= $loginFromCookie?></span>!</a>
                    <a class="nav__link" href="/reg/public/logout">Log out</a>
                    <a class="nav__link" href="/reg/public/users">All users</a>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</header>
<div class="intro__login">
    <div class="intro__img"></div>
    <div class="user__info">
        <div class="account">Account</div>
        <br>
        <div class="user__nick_profile"><?= $userNickname?></div>
        <br>
        <a class = "user__avatar__container" href="/reg/public/profile/settings">
        <img width="90" height="90" alt="" src="data:image/jpeg;base64,<?= $userAvatar?>">
        </a>
        <br>
        <div class="user__info__email__days"><?= $emailUser ?></div>
        <?php
        if ($dayOfUser == 1): ?>
        <div class="user__info__email__days">1 day</div>
        <?php else: ?>
        <div class="user__info__email__days"><?= $dayOfUser?> days</div>
        <?php endif; ?>
        <br>
        <?php if ($_COOKIE['nickname'] === $userNickname): ?>
        <form action="/reg/public/profile/settings" method="post">
            <input class="button_settings " type="submit" name="settingsUser" value="Settings">
        </form>
        <?php endif; ?>
        </div>
</div>
</div>
</body>
</html>