<?php

include_once(__DIR__ . "/../model/User.php");
include_once(__DIR__ . "/../dao/UserDAO.php");

class UserService
{
    public function regist(User $user): User
    {

        $userDAO = new UserDAO();
        $userDAO->register($user);

        return $user;
    }

    public function log(User $user): User
    {
        $userDAO = new UserDAO;
        $userDAO->login($user);

        return $user;
    }
}