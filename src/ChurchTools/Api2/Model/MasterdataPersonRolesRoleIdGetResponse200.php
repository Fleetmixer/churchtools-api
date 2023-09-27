<?php

namespace ChurchTools\Api2\Model;

class MasterdataPersonRolesRoleIdGetResponse200 extends \ArrayObject
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
     * @var Role
     */
    protected $data;
    /**
     * 
     *
     * @return Role
     */
    public function getData() : Role
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Role $data
     *
     * @return self
     */
    public function setData(Role $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}