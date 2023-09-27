<?php

namespace ChurchTools\Api2\Model;

class CampusesPostResponse201 extends \ArrayObject
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
     * @var CampusesPostResponse201Meta
     */
    protected $meta;
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
    /**
     * 
     *
     * @return CampusesPostResponse201Meta
     */
    public function getMeta() : CampusesPostResponse201Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param CampusesPostResponse201Meta $meta
     *
     * @return self
     */
    public function setMeta(CampusesPostResponse201Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}