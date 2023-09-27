<?php

namespace ChurchTools\Api2\Model;

class PersonsPropertiesPostBody extends \ArrayObject
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
     * @var int[]
     */
    protected $ids;
    /**
     * 
     *
     * @return int[]
     */
    public function getIds() : array
    {
        return $this->ids;
    }
    /**
     * 
     *
     * @param int[] $ids
     *
     * @return self
     */
    public function setIds(array $ids) : self
    {
        $this->initialized['ids'] = true;
        $this->ids = $ids;
        return $this;
    }
}