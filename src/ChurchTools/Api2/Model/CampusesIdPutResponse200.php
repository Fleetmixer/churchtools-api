<?php

namespace ChurchTools\Api2\Model;

class CampusesIdPutResponse200 extends \ArrayObject
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
     * @var Campus
     */
    protected $data;
    /**
     * 
     *
     * @return Campus
     */
    public function getData() : Campus
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Campus $data
     *
     * @return self
     */
    public function setData(Campus $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}