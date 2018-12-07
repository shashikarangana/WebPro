<?php

class CusOrder
{
    private $oid;
    private $cid;
    private $fid;
    private $pid;
    private $quantity;
    private $orderDate;
    private $payment;

    /**
     * CusOrder constructor.
     * @param $oid
     * @param $cid
     * @param $fid
     * @param $pid
     * @param $quantity
     * @param $orderDate
     * @param $payment
     */
    public function __construct($oid, $cid, $fid, $pid, $quantity, $orderDate, $payment)
    {
        $this->oid = $oid;
        $this->cid = $cid;
        $this->fid = $fid;
        $this->pid = $pid;
        $this->quantity = $quantity;
        $this->orderDate = $orderDate;
        $this->payment = $payment;
    }

    /**
     * @return mixed
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     * @param mixed $oid
     */
    public function setOid($oid): void
    {
        $this->oid = $oid;
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
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * @param mixed $fid
     */
    public function setFid($fid): void
    {
        $this->fid = $fid;
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
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param mixed $orderDate
     */
    public function setOrderDate($orderDate): void
    {
        $this->orderDate = $orderDate;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param mixed $payment
     */
    public function setPayment($payment): void
    {
        $this->payment = $payment;
    }



}