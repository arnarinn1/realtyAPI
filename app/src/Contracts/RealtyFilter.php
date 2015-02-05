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
     * Ids of realty codes
     *
     * @param string
     */
    private $realtyCodeIds;


    /**
     * Create a new Realty Filter
     *
     * @param string $lowerPrice
     * @param string $upperPrice
     * @param string $realtorId
     * @param string $realtyCodeIds
     */
    public function __construct($lowerPrice, $upperPrice, $realtorId, $realtyCodeIds)
    {
        $this->lowerPrice = $lowerPrice;
        $this->upperPrice = $upperPrice;
        $this->realtorId = $realtorId;
        $this->realtyCodeIds = $realtyCodeIds;
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

    /**
    * Return the realtorId
    *
    * @return array
    */
    public function realtyCodeIds()
    {
        $ids = $this->realtyCodeIds;

        return $ids != null
            ? explode('-', $ids)
            : array(); 
    }
}