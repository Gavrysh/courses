<?php
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
            <form>
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
                <button type="submit" class="btn btn-primary">Вхід</button>
            </form>
        </div>
    </body>
</html>
