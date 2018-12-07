<?php

class Payment
{
    private $pid;
    private $price;

    /**
     * Payment constructor.
     * @param $pid
     * @param $price
     */
    public function __construct($pid, $price)
    {
        $this->pid = $pid;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

}