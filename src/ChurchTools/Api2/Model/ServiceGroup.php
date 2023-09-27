<?php

namespace ChurchTools\Api2\Model;

class ServiceGroup extends \ArrayObject
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
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $sortKey;
    /**
     * 
     *
     * @var bool
     */
    protected $viewAll;
    /**
     * 
     *
     * @var int|null
     */
    protected $campusId;
    /**
     * 
     *
     * @var bool
     */
    protected $onlyVisibleInCampusFilter;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSortKey() : int
    {
        return $this->sortKey;
    }
    /**
     * 
     *
     * @param int $sortKey
     *
     * @return self
     */
    public function setSortKey(int $sortKey) : self
    {
        $this->initialized['sortKey'] = true;
        $this->sortKey = $sortKey;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getViewAll() : bool
    {
        return $this->viewAll;
    }
    /**
     * 
     *
     * @param bool $viewAll
     *
     * @return self
     */
    public function setViewAll(bool $viewAll) : self
    {
        $this->initialized['viewAll'] = true;
        $this->viewAll = $viewAll;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getCampusId() : ?int
    {
        return $this->campusId;
    }
    /**
     * 
     *
     * @param int|null $campusId
     *
     * @return self
     */
    public function setCampusId(?int $campusId) : self
    {
        $this->initialized['campusId'] = true;
        $this->campusId = $campusId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOnlyVisibleInCampusFilter() : bool
    {
        return $this->onlyVisibleInCampusFilter;
    }
    /**
     * 
     *
     * @param bool $onlyVisibleInCampusFilter
     *
     * @return self
     */
    public function setOnlyVisibleInCampusFilter(bool $onlyVisibleInCampusFilter) : self
    {
        $this->initialized['onlyVisibleInCampusFilter'] = true;
        $this->onlyVisibleInCampusFilter = $onlyVisibleInCampusFilter;
        return $this;
    }
}