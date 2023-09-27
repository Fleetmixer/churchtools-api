<?php

namespace ChurchTools\Api2\Model;

class Campus extends \ArrayObject
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
     * ID of campus
     *
     * @var int
     */
    protected $id;
    /**
     * Campus name
     *
     * @var string
     */
    protected $name;
    /**
     * Abbreviation
     *
     * @var string
     */
    protected $shorty;
    /**
     * Used to sort all campuses
     *
     * @var int
     */
    protected $sortKey;
    /**
     * ID of campus
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * ID of campus
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
     * Campus name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Campus name
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
     * Abbreviation
     *
     * @return string
     */
    public function getShorty() : string
    {
        return $this->shorty;
    }
    /**
     * Abbreviation
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
     * Used to sort all campuses
     *
     * @return int
     */
    public function getSortKey() : int
    {
        return $this->sortKey;
    }
    /**
     * Used to sort all campuses
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
}