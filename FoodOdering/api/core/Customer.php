<?php


class Customer
{
    private $cid;
    private $cname;
    private $caddress;
    private $cmobile;
    private $cemail;
    private $cuname;
    private $cpwd;

    /**
     * Customer constructor.
     * @param $cid
     * @param $cname
     * @param $caddress
     * @param $cmobile
     * @param $cemail
     */
    public function __construct($cid, $cname, $caddress, $cmobile, $cemail, $cuname, $cpwd)
    {
        $this->cid = $cid;
        $this->cname = $cname;
        $this->caddress = $caddress;
        $this->cmobile = $cmobile;
        $this->cemail = $cemail;
        $this->cuname = $cuname;
        $this->cpwd = $cpwd;
    }

    /**
     * @return mixed
     */
    public function getCuname()
    {
        return $this->cuname;
    }

    /**
     * @param mixed $cuname
     */
    public function setCuname($cuname): void
    {
        $this->cuname = $cuname;
    }

    /**
     * @return mixed
     */
    public function getCpwd()
    {
        return $this->cpwd;
    }

    /**
     * @param mixed $cpwd
     */
    public function setCpwd($cpwd): void
    {
        $this->cpwd = $cpwd;
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
    public function setCid($cid)
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
    public function setCname($cname)
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
    public function setCaddress($caddress)
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
    public function setCmobile($cmobile)
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
    public function setCemail($cemail)
    {
        $this->cemail = $cemail;
    }


}