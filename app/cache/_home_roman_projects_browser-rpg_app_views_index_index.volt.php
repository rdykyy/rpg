<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="<?php echo $this->url->getStatic('css/style.css'); ?>"/>

    <title> Главная  </title>

</head>
<body>
<div class="content">
    <div class="header">
        <div class="right">
            <?php if (isset($user)) { ?>
            Привет, <?php echo $user['name']; ?>. <a href="<?php echo $this->url->get('authorization/logout'); ?>">Выйти</a>
            <?php } else { ?>
            <a href="<?php echo $this->url->get('registration'); ?>">Регистрация</a>, <a href="<?php echo $this->url->get('authorization'); ?>">Войти</a>
            <?php } ?>
        </div>
    </div>
    
Супер - мега игра. Регестрируйся и играй уже сейчас!!!

</div>
</body>
</html>