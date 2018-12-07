<?php

class LoginCus
{
    private $cid;
    private $cname;
    private $caddress;
    private $cmobile;
    private $cemail;
    private $userPassword;

    /**
     * LoginCus constructor.
     * @param $cid
     * @param $cname
     * @param $caddress
     * @param $cmobile
     * @param $cemail
     * @param $userPassword
     */
    public function __construct($cid, $cname, $caddress, $cmobile, $cemail, $userPassword)
    {
        $this->cid = $cid;
        $this->cname = $cname;
        $this->caddress = $caddress;
        $this->cmobile = $cmobile;
        $this->cemail = $cemail;
        $this->userPassword = $userPassword;
    }

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid): void
    {
        $this->cid = $cid;
    }

    /**
     * @return mixed
     */
    public function getCname()
    {
        return $this->cname;
    }

    /**
     * @param mixed $cname
     */
    public function setCname($cname): void
    {
        $this->cname = $cname;
    }

    /**
     * @return mixed
     */
    public function getCaddress()
    {
        return $this->caddress;
    }

    /**
     * @param mixed $caddress
     */
    public function setCaddress($caddress): void
    {
        $this->caddress = $caddress;
    }

    /**
     * @return mixed
     */
    public function getCmobile()
    {
        return $this->cmobile;
    }

    /**
     * @param mixed $cmobile
     */
    public function setCmobile($cmobile): void
    {
        $this->cmobile = $cmobile;
    }

    /**
     * @return mixed
     */
    public function getCemail()
    {
        return $this->cemail;
    }

    /**
     * @param mixed $cemail
     */
    public function setCemail($cemail): void
    {
        $this->cemail = $cemail;
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