<?php

namespace ChurchTools\Api2\Model;

class PersonsPropertiesPostResponse200Data1 extends \ArrayObject
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
     * @var bool
     */
    protected $hasEmail;
    /**
     * 
     *
     * @return bool
     */
    public function getHasEmail() : bool
    {
        return $this->hasEmail;
    }
    /**
     * 
     *
     * @param bool $hasEmail
     *
     * @return self
     */
    public function setHasEmail(bool $hasEmail) : self
    {
        $this->initialized['hasEmail'] = true;
        $this->hasEmail = $hasEmail;
        return $this;
    }
}