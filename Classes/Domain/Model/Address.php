<?php

namespace ExtTtaddres\ExtTtaddress\Domain\Model;

class Address extends \FriendsOfTYPO3\TtAddress\Domain\Model\Address {

    /** @var \DateTime */
    protected $txDeathday;

    /**
     * @return \DateTime
     */
    public function getTxDeathday()
    {
        return $this->txDeathday;
    }

    /**
     * @param \DateTime $txDeathday
     */
    public function setTxDeathday($txDeathday)
    {
        $this->txDeathday = $txDeathday;
    }


}
