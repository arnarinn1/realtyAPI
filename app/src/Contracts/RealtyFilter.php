<?php namespace src\Contracts;

class RealtyFilter
{
	/**
     * Lower price of the realty
     *
     * @param string
     */
    private $lowerPrice;

	/**
     * Upper price of the relaty
     *
     * @param string
     */
    private $upperPrice;

    /**
     * Id of the realtor
     *
     * @param string
     */
    private $realtorId;


    /**
     * Create a new Realty Filter
     *
     * @param string $lowerPrice
     * @param string $upperPrice
     */
    public function __construct($lowerPrice, $upperPrice, $realtorId)
    {
        $this->lowerPrice = $lowerPrice;
        $this->upperPrice = $upperPrice;
        $this->realtorId = $realtorId;
    }

    /**
    * Return the lowerPrice
    *
    * @return string
    */
    public function lowerPrice()
    {
        $price = $this->lowerPrice;
        return $price != null
        	? $price
        	: 0;
    }

    /**
    * Return the upperPrice
    *
    * @return string
    */
    public function upperPrice()
    {
    	$price = $this->upperPrice;
        return $price != null
        	? $price
        	: 1000000000;
    }

    /**
    * Return the realtorId
    *
    * @return string
    */
    public function realtorId()
    {
        return $this->realtorId;
    }
}