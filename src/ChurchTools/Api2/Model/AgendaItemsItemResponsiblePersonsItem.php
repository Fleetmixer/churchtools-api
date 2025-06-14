<?php

namespace ChurchTools\Api2\Model;

class AgendaItemsItemResponsiblePersonsItem extends \ArrayObject
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
     * Name of the service, which is also the placeholder in the raw text string.
     *
     * @var string
     */
    protected $service;
    /**
     * Flat to indicate if the person has approved the service or is requested.
     *
     * @var bool
     */
    protected $approved;
    /**
     * 
     *
     * @var object
     */
    protected $person;
    /**
     * Name of the service, which is also the placeholder in the raw text string.
     *
     * @return string
     */
    public function getService() : string
    {
        return $this->service;
    }
    /**
     * Name of the service, which is also the placeholder in the raw text string.
     *
     * @param string $service
     *
     * @return self
     */
    public function setService(string $service) : self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * Flat to indicate if the person has approved the service or is requested.
     *
     * @return bool
     */
    public function getApproved() : bool
    {
        return $this->approved;
    }
    /**
     * Flat to indicate if the person has approved the service or is requested.
     *
     * @param bool $approved
     *
     * @return self
     */
    public function setApproved(bool $approved) : self
    {
        $this->initialized['approved'] = true;
        $this->approved = $approved;
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
}