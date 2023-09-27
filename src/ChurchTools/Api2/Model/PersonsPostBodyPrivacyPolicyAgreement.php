<?php

namespace ChurchTools\Api2\Model;

class PersonsPostBodyPrivacyPolicyAgreement extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * 
     *
     * @var int|null
     */
    protected $typeId;
    /**
     * 
     *
     * @var int|null
     */
    protected $whoId;
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param \DateTime|null $date
     *
     * @return self
     */
    public function setDate(?\DateTime $date) : self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTypeId() : ?int
    {
        return $this->typeId;
    }
    /**
     * 
     *
     * @param int|null $typeId
     *
     * @return self
     */
    public function setTypeId(?int $typeId) : self
    {
        $this->initialized['typeId'] = true;
        $this->typeId = $typeId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWhoId() : ?int
    {
        return $this->whoId;
    }
    /**
     * 
     *
     * @param int|null $whoId
     *
     * @return self
     */
    public function setWhoId(?int $whoId) : self
    {
        $this->initialized['whoId'] = true;
        $this->whoId = $whoId;
        return $this;
    }
}