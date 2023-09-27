<?php

namespace ChurchTools\Api2\Model;

class StatusesPostResponse201 extends \ArrayObject
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
     * @var StatusesPostResponse201Meta
     */
    protected $meta;
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
    /**
     * 
     *
     * @return StatusesPostResponse201Meta
     */
    public function getMeta() : StatusesPostResponse201Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param StatusesPostResponse201Meta $meta
     *
     * @return self
     */
    public function setMeta(StatusesPostResponse201Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}