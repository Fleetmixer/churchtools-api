<?php

namespace ChurchTools\Api2\Model;

class EventEventServicesItem extends \ArrayObject
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
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var object
     */
    protected $person;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $serviceId;
    /**
     * 
     *
     * @var bool
     */
    protected $agreed;
    /**
     * 
     *
     * @var bool
     */
    protected $isValid;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $requestedDate;
    /**
     * 
     *
     * @var object
     */
    protected $requesterPerson;
    /**
     * 
     *
     * @var string
     */
    protected $comment;
    /**
     * 
     *
     * @var int
     */
    protected $counter;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getPerson()
    {
        return $this->person;
    }
    /**
     * 
     *
     * @param object $person
     *
     * @return self
     */
    public function setPerson($person) : self
    {
        $this->initialized['person'] = true;
        $this->person = $person;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getServiceId() : int
    {
        return $this->serviceId;
    }
    /**
     * 
     *
     * @param int $serviceId
     *
     * @return self
     */
    public function setServiceId(int $serviceId) : self
    {
        $this->initialized['serviceId'] = true;
        $this->serviceId = $serviceId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAgreed() : bool
    {
        return $this->agreed;
    }
    /**
     * 
     *
     * @param bool $agreed
     *
     * @return self
     */
    public function setAgreed(bool $agreed) : self
    {
        $this->initialized['agreed'] = true;
        $this->agreed = $agreed;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsValid() : bool
    {
        return $this->isValid;
    }
    /**
     * 
     *
     * @param bool $isValid
     *
     * @return self
     */
    public function setIsValid(bool $isValid) : self
    {
        $this->initialized['isValid'] = true;
        $this->isValid = $isValid;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getRequestedDate() : \DateTime
    {
        return $this->requestedDate;
    }
    /**
     * 
     *
     * @param \DateTime $requestedDate
     *
     * @return self
     */
    public function setRequestedDate(\DateTime $requestedDate) : self
    {
        $this->initialized['requestedDate'] = true;
        $this->requestedDate = $requestedDate;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getRequesterPerson()
    {
        return $this->requesterPerson;
    }
    /**
     * 
     *
     * @param object $requesterPerson
     *
     * @return self
     */
    public function setRequesterPerson($requesterPerson) : self
    {
        $this->initialized['requesterPerson'] = true;
        $this->requesterPerson = $requesterPerson;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCounter() : int
    {
        return $this->counter;
    }
    /**
     * 
     *
     * @param int $counter
     *
     * @return self
     */
    public function setCounter(int $counter) : self
    {
        $this->initialized['counter'] = true;
        $this->counter = $counter;
        return $this;
    }
}