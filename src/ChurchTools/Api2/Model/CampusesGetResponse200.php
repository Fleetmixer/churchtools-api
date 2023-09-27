<?php

namespace ChurchTools\Api2\Model;

class CampusesGetResponse200 extends \ArrayObject
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
     * @var Campus[]
     */
    protected $data;
    /**
     * 
     *
     * @var CampusesGetResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return Campus[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Campus[] $data
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
     * @return CampusesGetResponse200Meta
     */
    public function getMeta() : CampusesGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param CampusesGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(CampusesGetResponse200Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}