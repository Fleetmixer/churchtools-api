<?php

namespace ChurchTools\Api2\Model;

class DepartmentsGetResponse200 extends \ArrayObject
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
     * @var Department[]
     */
    protected $data;
    /**
     * 
     *
     * @var DepartmentsGetResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return Department[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Department[] $data
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
     * @return DepartmentsGetResponse200Meta
     */
    public function getMeta() : DepartmentsGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param DepartmentsGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(DepartmentsGetResponse200Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}