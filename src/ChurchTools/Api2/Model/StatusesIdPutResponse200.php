<?php

namespace ChurchTools\Api2\Model;

class StatusesIdPutResponse200 extends \ArrayObject
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
     * @var Status
     */
    protected $data;
    /**
     * 
     *
     * @return Status
     */
    public function getData() : Status
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Status $data
     *
     * @return self
     */
    public function setData(Status $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}