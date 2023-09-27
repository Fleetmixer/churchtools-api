<?php

namespace ChurchTools\Api2\Model;

class PersonsIdRelationshipsGetResponse200 extends \ArrayObject
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
     * @var PersonsIdRelationshipsGetResponse200DataItem[]
     */
    protected $data;
    /**
     * 
     *
     * @return PersonsIdRelationshipsGetResponse200DataItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param PersonsIdRelationshipsGetResponse200DataItem[] $data
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