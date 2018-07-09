<?php

class Authentication
{
    //проверка на то, авторизован ли пользователь на сайте
    public static function isAuth()
    {
        static $status = true;

        if (!isset($_COOKIE['PHPSESSID'])) {
            session_start();
            print_r($_SERVER);
            exit;
            $_SESSION['user']['id'] = $_SERVER['HTTP_COOKIE'];
            $_SESSION['user']['addr'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['user']['client'] = $_SERVER['HTTP_USER_AGENT'];
        } else {
            $status = false;
        }
        return $status;
    }

    //авторизация
    public static function auth($login, $password)
    {
        if (self::getLogin($login, $password)) {
            self::isAuth();
            return true;
        } else {
            return false;
        }
    }

    //возврат имени пользователя
    public static function getLogin($login, $password)
    {
        $users = [
            'serj' => '123456'
        ];

        if (array_key_exists($login, $users)) {
            return true;
        } else {
            return false;
        }
    }

    //выход
    public static function logout()
    {
        setcookie('PHPSESSID', '', time() -3600);
        session_unset();
        session_destroy();
    }
}