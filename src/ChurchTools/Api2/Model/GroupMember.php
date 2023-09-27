<?php

namespace ChurchTools\Api2\Model;

class GroupMember extends \ArrayObject
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
    protected $personId;
    /**
     * 
     *
     * @var int
     */
    protected $roleId;
    /**
     * 
     *
     * @var string
     */
    protected $comment;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $memberStartDate;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $memberEndDate;
    /**
     * 
     *
     * @return int
     */
    public function getPersonId() : int
    {
        return $this->personId;
    }
    /**
     * 
     *
     * @param int $personId
     *
     * @return self
     */
    public function setPersonId(int $personId) : self
    {
        $this->initialized['personId'] = true;
        $this->personId = $personId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRoleId() : int
    {
        return $this->roleId;
    }
    /**
     * 
     *
     * @param int $roleId
     *
     * @return self
     */
    public function setRoleId(int $roleId) : self
    {
        $this->initialized['roleId'] = true;
        $this->roleId = $roleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getMemberStartDate() : \DateTime
    {
        return $this->memberStartDate;
    }
    /**
     * 
     *
     * @param \DateTime $memberStartDate
     *
     * @return self
     */
    public function setMemberStartDate(\DateTime $memberStartDate) : self
    {
        $this->initialized['memberStartDate'] = true;
        $this->memberStartDate = $memberStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getMemberEndDate() : ?\DateTime
    {
        return $this->memberEndDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $memberEndDate
     *
     * @return self
     */
    public function setMemberEndDate(?\DateTime $memberEndDate) : self
    {
        $this->initialized['memberEndDate'] = true;
        $this->memberEndDate = $memberEndDate;
        return $this;
    }
}