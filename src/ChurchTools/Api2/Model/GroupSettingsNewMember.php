<?php

namespace ChurchTools\Api2\Model;

class GroupSettingsNewMember extends \ArrayObject
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
     * @var int|null
     */
    protected $campusId;
    /**
     * 
     *
     * @var int|null
     */
    protected $statusId;
    /**
     * 
     *
     * @var int|null
     */
    protected $departmentId;
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
     * @return int|null
     */
    public function getStatusId() : ?int
    {
        return $this->statusId;
    }
    /**
     * 
     *
     * @param int|null $statusId
     *
     * @return self
     */
    public function setStatusId(?int $statusId) : self
    {
        $this->initialized['statusId'] = true;
        $this->statusId = $statusId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDepartmentId() : ?int
    {
        return $this->departmentId;
    }
    /**
     * 
     *
     * @param int|null $departmentId
     *
     * @return self
     */
    public function setDepartmentId(?int $departmentId) : self
    {
        $this->initialized['departmentId'] = true;
        $this->departmentId = $departmentId;
        return $this;
    }
}