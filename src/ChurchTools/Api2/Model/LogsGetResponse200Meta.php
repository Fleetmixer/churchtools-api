<?php

namespace ChurchTools\Api2\Model;

class LogsGetResponse200Meta extends \ArrayObject
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
     * @var LogsGetResponse200MetaPagination
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
     * @return LogsGetResponse200MetaPagination
     */
    public function getPagination() : LogsGetResponse200MetaPagination
    {
        return $this->pagination;
    }
    /**
     * 
     *
     * @param LogsGetResponse200MetaPagination $pagination
     *
     * @return self
     */
    public function setPagination(LogsGetResponse200MetaPagination $pagination) : self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
}