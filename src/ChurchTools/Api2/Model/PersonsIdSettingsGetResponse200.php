<?php

namespace ChurchTools\Api2\Model;

class PersonsIdSettingsGetResponse200 extends \ArrayObject
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
     * @var PersonSetting[]
     */
    protected $data;
    /**
     * 
     *
     * @return PersonSetting[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PersonSetting[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}