<?php

class Authentication
{
    public function isAuth()
    {
        return true;
    }

    public function auth($name)
    {
        return true;
    }

    public function getLogin()
    {
        //Запрос на користувача з БД MySQL
        return true;
    }
    public function logout()
    {
        session_destroy();
        session_unset();
    }
}