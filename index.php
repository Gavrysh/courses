<?php
require_once './classes/class_Authentication.php';

$btnLogoutEnable = false;

if (isset($_POST['submitLogin'])) {
    if(Authentication::auth($_POST['login'])) {
        $btnLogoutEnable = true;
    }
} else {
    Authentication::logout();
}
?>

<!DOCTYPE html>
<html lang="uk_UA">
    <head>
        <title>Основы PHP. Сессия</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
                <div class="form-group">
                    <label for="login">Логін</label>
                    <input type="text" class="form-control" id="login" placeholder="Введіть логін">
                    <small id="loginHelp" class="form-text text-muted">Ваш логін не буде використовуватись десь ще</small>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" placeholder="Пароль">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Запам'ятати мене</label>
                </div>
                <?php
                if (!$btnLogoutEnable) {
                    echo '<button type="submit" class="btn btn-primary" name="submitLogin">Вхід</button>';
                } else {
                    echo '<button type="submit" class="btn btn-primary" name="submitLogout">Вихід</button>';
                }
                ?>
            </form>
        </div>
    </body>
</html>
