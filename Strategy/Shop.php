<?php

class Shop
{
protected Int $cost;
protected Int $getPhoneNumber;

    /**
     * Shop constructor.
     * @param Int $cost
     * @param Int $getPhoneNumber
     */
    public function __construct(int $cost, int $getPhoneNumber)
    {
        $this->cost = $cost;
        $this->getPhoneNumber = $getPhoneNumber;
    }


    /**
     * @param Int $cost
     */
    public function setCost(int $cost): void
    {
        $this->cost = $cost;
    }

    /**
     * @param Int $getPhoneNumber
     */
    public function setGetPhoneNumber(int $getPhoneNumber): void
    {
        $this->getPhoneNumber = $getPhoneNumber;
    }

    /**
	 * @return mixed
	 */
	public function getTotalCost()
	{
		return $this->cost;
	}

	/**
	 * @return mixed
	 */
	public function getPhoneNumber()
	{
		return $this->getPhoneNumber;
	}


}