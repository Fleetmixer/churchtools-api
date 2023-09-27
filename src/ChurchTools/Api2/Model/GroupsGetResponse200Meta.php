<?php

namespace ChurchTools\Api2\Model;

class GroupsGetResponse200Meta extends \ArrayObject
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
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @var object
     */
    protected $pagination;
    /**
     * 
     *
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count) : self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getPagination()
    {
        return $this->pagination;
    }
    /**
     * 
     *
     * @param object $pagination
     *
     * @return self
     */
    public function setPagination($pagination) : self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
}