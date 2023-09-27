<?php

namespace ChurchTools\Api2\Model;

class PersonsIdPatchResponse200 extends \ArrayObject
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
     * A person object includes all fields the logged in user may see depending on the security level. Additional DB fields, created by the admin, are also part of the response. Those fields have the same name as the column name.
     *
     * @var Person
     */
    protected $data;
    /**
     * A person object includes all fields the logged in user may see depending on the security level. Additional DB fields, created by the admin, are also part of the response. Those fields have the same name as the column name.
     *
     * @return Person
     */
    public function getData() : Person
    {
        return $this->data;
    }
    /**
     * A person object includes all fields the logged in user may see depending on the security level. Additional DB fields, created by the admin, are also part of the response. Those fields have the same name as the column name.
     *
     * @param Person $data
     *
     * @return self
     */
    public function setData(Person $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}