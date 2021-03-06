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
     * Ids of realty types
     *
     * @param string
     */
    private $realtyTypes;

    /**
     * Lower room number value
     *
     * @param string
     */
    private $lowerRoomNumber;

    /**
     * Upper room number value
     *
     * @param string
     */
    private $upperRoomNumber;

    /**
     * Create a new Realty Filter
     *
     * @param string $lowerPrice
     * @param string $upperPrice
     * @param string $realtorId
     * @param string $realtyCodeIds
     * @param string $realtyTypes
     * @param string $lowerRoomNumber
     * @param string $upperRoomNumber
     */
    public function __construct($lowerPrice, 
                                $upperPrice,
                                $realtorId, 
                                $realtyCodeIds, 
                                $realtyTypes, 
                                $lowerRoomNumber, 
                                $upperRoomNumber)
    {
        $this->lowerPrice = $lowerPrice;
        $this->upperPrice = $upperPrice;
        $this->realtorId = $realtorId;
        $this->realtyCodeIds = $realtyCodeIds;
        $this->realtyTypes = $realtyTypes;
        $this->lowerRoomNumber = $lowerRoomNumber;
        $this->upperRoomNumber = $upperRoomNumber;
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

    /**
    * Return the realtyTypes
    *
    * @return array
    */
    public function realtyTypes()
    {
        $types = $this->realtyTypes;

        return $types != null
            ? explode('-', $types)
            : array(); 
    }

    /**
    * Return the lower room number
    *
    * @return string
    */
    public function lowerRoomNumber()
    {
        $lowerRoom = $this->lowerRoomNumber;

        return $lowerRoom != null
            ? $lowerRoom
            : "1";
    }

    /**
    * Return the upper room number
    *
    * @return string
    */
    public function upperRoomNumber()
    {
        $upperRoom = $this->upperRoomNumber;

        return $upperRoom != null
            ? $upperRoom
            : "9";
    }
}