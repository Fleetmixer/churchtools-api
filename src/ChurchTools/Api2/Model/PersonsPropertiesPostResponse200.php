<?php

namespace ChurchTools\Api2\Model;

class PersonsPropertiesPostResponse200 extends \ArrayObject
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
     * @var PersonsPropertiesPostResponse200Data
     */
    protected $data;
    /**
     * 
     *
     * @return PersonsPropertiesPostResponse200Data
     */
    public function getData() : PersonsPropertiesPostResponse200Data
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PersonsPropertiesPostResponse200Data $data
     *
     * @return self
     */
    public function setData(PersonsPropertiesPostResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}