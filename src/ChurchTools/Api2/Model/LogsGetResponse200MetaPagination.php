<?php

namespace ChurchTools\Api2\Model;

class LogsGetResponse200MetaPagination extends \ArrayObject
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
     * Total number of results.
     *
     * @var int
     */
    protected $total;
    /**
     * Current page.
     *
     * @var int
     */
    protected $current;
    /**
     * Number of results per page.
     *
     * @var int
     */
    protected $limit;
    /**
     * Number of last page.
     *
     * @var int
     */
    protected $lastPage;
    /**
     * Total number of results.
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * Total number of results.
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * Current page.
     *
     * @return int
     */
    public function getCurrent() : int
    {
        return $this->current;
    }
    /**
     * Current page.
     *
     * @param int $current
     *
     * @return self
     */
    public function setCurrent(int $current) : self
    {
        $this->initialized['current'] = true;
        $this->current = $current;
        return $this;
    }
    /**
     * Number of results per page.
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * Number of results per page.
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit) : self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
    /**
     * Number of last page.
     *
     * @return int
     */
    public function getLastPage() : int
    {
        return $this->lastPage;
    }
    /**
     * Number of last page.
     *
     * @param int $lastPage
     *
     * @return self
     */
    public function setLastPage(int $lastPage) : self
    {
        $this->initialized['lastPage'] = true;
        $this->lastPage = $lastPage;
        return $this;
    }
}