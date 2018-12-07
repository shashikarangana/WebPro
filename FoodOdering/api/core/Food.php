<?php

class Food
{
    private $fid;
    private $fname;
    private $price;
    private $description;

    /**
     * Food constructor.
     * @param $fid
     * @param $fname
     * @param $price
     * @param $description
     */
    public function __construct($fid, $fname, $price, $description)
    {
        $this->fid = $fid;
        $this->fname = $fname;
        $this->price = $price;
        $this->description = $description;
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
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname): void
    {
        $this->fname = $fname;
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

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

}