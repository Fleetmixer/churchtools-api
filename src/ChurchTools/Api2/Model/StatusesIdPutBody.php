<?php

namespace ChurchTools\Api2\Model;

class StatusesIdPutBody extends \ArrayObject
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $shorty;
    /**
     * 
     *
     * @var bool
     */
    protected $isMember;
    /**
     * 
     *
     * @var bool
     */
    protected $isSearchable;
    /**
     * 
     *
     * @var int
     */
    protected $sortKey;
    /**
     * 
     *
     * @var int
     */
    protected $securityLevelId;
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
     * @return string
     */
    public function getShorty() : string
    {
        return $this->shorty;
    }
    /**
     * 
     *
     * @param string $shorty
     *
     * @return self
     */
    public function setShorty(string $shorty) : self
    {
        $this->initialized['shorty'] = true;
        $this->shorty = $shorty;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsMember() : bool
    {
        return $this->isMember;
    }
    /**
     * 
     *
     * @param bool $isMember
     *
     * @return self
     */
    public function setIsMember(bool $isMember) : self
    {
        $this->initialized['isMember'] = true;
        $this->isMember = $isMember;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsSearchable() : bool
    {
        return $this->isSearchable;
    }
    /**
     * 
     *
     * @param bool $isSearchable
     *
     * @return self
     */
    public function setIsSearchable(bool $isSearchable) : self
    {
        $this->initialized['isSearchable'] = true;
        $this->isSearchable = $isSearchable;
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
     * @return int
     */
    public function getSecurityLevelId() : int
    {
        return $this->securityLevelId;
    }
    /**
     * 
     *
     * @param int $securityLevelId
     *
     * @return self
     */
    public function setSecurityLevelId(int $securityLevelId) : self
    {
        $this->initialized['securityLevelId'] = true;
        $this->securityLevelId = $securityLevelId;
        return $this;
    }
}