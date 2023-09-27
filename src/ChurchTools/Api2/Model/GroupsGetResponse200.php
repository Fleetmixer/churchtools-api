<?php

namespace ChurchTools\Api2\Model;

class GroupsGetResponse200 extends \ArrayObject
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
     * @var Group[]
     */
    protected $data;
    /**
     * 
     *
     * @var GroupsGetResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return Group[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Group[] $data
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
     * @return GroupsGetResponse200Meta
     */
    public function getMeta() : GroupsGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param GroupsGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(GroupsGetResponse200Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}