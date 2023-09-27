<?php

namespace ChurchTools\Api2\Model;

class PersonsIdRelationshipsGetResponse200DataItem extends \ArrayObject
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
    protected $relationshipName;
    /**
     * 
     *
     * @var string
     */
    protected $degreeOfRelationship;
    /**
     * 
     *
     * @var object
     */
    protected $relative;
    /**
     * 
     *
     * @return string
     */
    public function getRelationshipName() : string
    {
        return $this->relationshipName;
    }
    /**
     * 
     *
     * @param string $relationshipName
     *
     * @return self
     */
    public function setRelationshipName(string $relationshipName) : self
    {
        $this->initialized['relationshipName'] = true;
        $this->relationshipName = $relationshipName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDegreeOfRelationship() : string
    {
        return $this->degreeOfRelationship;
    }
    /**
     * 
     *
     * @param string $degreeOfRelationship
     *
     * @return self
     */
    public function setDegreeOfRelationship(string $degreeOfRelationship) : self
    {
        $this->initialized['degreeOfRelationship'] = true;
        $this->degreeOfRelationship = $degreeOfRelationship;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getRelative()
    {
        return $this->relative;
    }
    /**
     * 
     *
     * @param object $relative
     *
     * @return self
     */
    public function setRelative($relative) : self
    {
        $this->initialized['relative'] = true;
        $this->relative = $relative;
        return $this;
    }
}