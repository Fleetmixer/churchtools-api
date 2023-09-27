<?php

namespace ChurchTools\Api2\Model;

class FieldsGetResponse200 extends \ArrayObject
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
     * @var FieldsGetResponse200DataItem[]
     */
    protected $data;
    /**
     * 
     *
     * @var FieldsGetResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return FieldsGetResponse200DataItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param FieldsGetResponse200DataItem[] $data
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
     * @return FieldsGetResponse200Meta
     */
    public function getMeta() : FieldsGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param FieldsGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(FieldsGetResponse200Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}