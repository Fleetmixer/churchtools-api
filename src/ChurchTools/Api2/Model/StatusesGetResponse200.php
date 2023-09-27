<?php

namespace ChurchTools\Api2\Model;

class StatusesGetResponse200 extends \ArrayObject
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
     * @var Status[]
     */
    protected $data;
    /**
     * 
     *
     * @var StatusesGetResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return Status[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Status[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return StatusesGetResponse200Meta
     */
    public function getMeta() : StatusesGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param StatusesGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(StatusesGetResponse200Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}