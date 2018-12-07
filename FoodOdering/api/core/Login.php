<?php

class Login
{
    private $userName;
    private $userPassword;

    /**
     * Login constructor.
     * @param $userName
     * @param $userPassword
     */
    public function __construct($userName, $userPassword)
    {
        $this->userName = $userName;
        $this->userPassword = $userPassword;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param mixed $userPassword
     */
    public function setUserPassword($userPassword): void
    {
        $this->userPassword = $userPassword;
    }


}