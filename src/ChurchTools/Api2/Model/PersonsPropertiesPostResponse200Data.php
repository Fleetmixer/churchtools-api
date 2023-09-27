<?php

namespace ChurchTools\Api2\Model;

class PersonsPropertiesPostResponse200Data extends \ArrayObject
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
     * @var PersonsPropertiesPostResponse200Data1
     */
    protected $n1;
    /**
     * 
     *
     * @return PersonsPropertiesPostResponse200Data1
     */
    public function get1() : PersonsPropertiesPostResponse200Data1
    {
        return $this->n1;
    }
    /**
     * 
     *
     * @param PersonsPropertiesPostResponse200Data1 $n1
     *
     * @return self
     */
    public function set1(PersonsPropertiesPostResponse200Data1 $n1) : self
    {
        $this->initialized['n1'] = true;
        $this->n1 = $n1;
        return $this;
    }
}