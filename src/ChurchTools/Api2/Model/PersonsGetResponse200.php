<?php

namespace ChurchTools\Api2\Model;

class PersonsGetResponse200 extends \ArrayObject
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
     * @var Person[]
     */
    protected $data;
    /**
     * 
     *
     * @var PersonsGetResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return Person[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Person[] $data
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
     * @return PersonsGetResponse200Meta
     */
    public function getMeta() : PersonsGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param PersonsGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(PersonsGetResponse200Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}