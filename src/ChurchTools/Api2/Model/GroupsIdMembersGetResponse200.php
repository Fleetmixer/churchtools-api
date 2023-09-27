<?php

namespace ChurchTools\Api2\Model;

class GroupsIdMembersGetResponse200 extends \ArrayObject
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
     * @var GroupMember[]
     */
    protected $data;
    /**
     * 
     *
     * @var GroupsIdMembersGetResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return GroupMember[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param GroupMember[] $data
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
     * @return GroupsIdMembersGetResponse200Meta
     */
    public function getMeta() : GroupsIdMembersGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param GroupsIdMembersGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(GroupsIdMembersGetResponse200Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}