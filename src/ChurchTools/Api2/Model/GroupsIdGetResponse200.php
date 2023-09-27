<?php

namespace ChurchTools\Api2\Model;

class GroupsIdGetResponse200 extends \ArrayObject
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
     * The group model structures all information in different objects: `information`, `settings`, `followUp`, and `roles`. Custom group fields are added to the root level of this model.
     *
     * @var Group
     */
    protected $data;
    /**
     * The group model structures all information in different objects: `information`, `settings`, `followUp`, and `roles`. Custom group fields are added to the root level of this model.
     *
     * @return Group
     */
    public function getData() : Group
    {
        return $this->data;
    }
    /**
     * The group model structures all information in different objects: `information`, `settings`, `followUp`, and `roles`. Custom group fields are added to the root level of this model.
     *
     * @param Group $data
     *
     * @return self
     */
    public function setData(Group $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}