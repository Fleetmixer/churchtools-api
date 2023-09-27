<?php

namespace ChurchTools\Api2\Model;

class GroupInformation extends \ArrayObject
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
     * @var string|null
     */
    protected $imageUrl;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $dateOfFoundation;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $meetingTime;
    /**
     * The number of the weekday. Starting with 0 = Sunday, 1 = Monday, ...
     *
     * @var int|null
     */
    protected $weekday;
    /**
     * 
     *
     * @var int|null
     */
    protected $groupCategoryId;
    /**
     * 
     *
     * @var int[]
     */
    protected $ageGroups;
    /**
     * 
     *
     * @var int|null
     */
    protected $targetGroupId;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxMembers;
    /**
     * 
     *
     * @var int
     */
    protected $groupTypeId;
    /**
     * 
     *
     * @var int
     */
    protected $groupStatusId;
    /**
     * 
     *
     * @var string
     */
    protected $note;
    /**
     * 
     *
     * @var int|null
     */
    protected $campusId;
    /**
     * 
     *
     * @return string|null
     */
    public function getImageUrl() : ?string
    {
        return $this->imageUrl;
    }
    /**
     * 
     *
     * @param string|null $imageUrl
     *
     * @return self
     */
    public function setImageUrl(?string $imageUrl) : self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getDateOfFoundation() : ?\DateTime
    {
        return $this->dateOfFoundation;
    }
    /**
     * 
     *
     * @param \DateTime|null $dateOfFoundation
     *
     * @return self
     */
    public function setDateOfFoundation(?\DateTime $dateOfFoundation) : self
    {
        $this->initialized['dateOfFoundation'] = true;
        $this->dateOfFoundation = $dateOfFoundation;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getEndDate() : ?\DateTime
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $endDate
     *
     * @return self
     */
    public function setEndDate(?\DateTime $endDate) : self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMeetingTime() : ?string
    {
        return $this->meetingTime;
    }
    /**
     * 
     *
     * @param string|null $meetingTime
     *
     * @return self
     */
    public function setMeetingTime(?string $meetingTime) : self
    {
        $this->initialized['meetingTime'] = true;
        $this->meetingTime = $meetingTime;
        return $this;
    }
    /**
     * The number of the weekday. Starting with 0 = Sunday, 1 = Monday, ...
     *
     * @return int|null
     */
    public function getWeekday() : ?int
    {
        return $this->weekday;
    }
    /**
     * The number of the weekday. Starting with 0 = Sunday, 1 = Monday, ...
     *
     * @param int|null $weekday
     *
     * @return self
     */
    public function setWeekday(?int $weekday) : self
    {
        $this->initialized['weekday'] = true;
        $this->weekday = $weekday;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getGroupCategoryId() : ?int
    {
        return $this->groupCategoryId;
    }
    /**
     * 
     *
     * @param int|null $groupCategoryId
     *
     * @return self
     */
    public function setGroupCategoryId(?int $groupCategoryId) : self
    {
        $this->initialized['groupCategoryId'] = true;
        $this->groupCategoryId = $groupCategoryId;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getAgeGroups() : array
    {
        return $this->ageGroups;
    }
    /**
     * 
     *
     * @param int[] $ageGroups
     *
     * @return self
     */
    public function setAgeGroups(array $ageGroups) : self
    {
        $this->initialized['ageGroups'] = true;
        $this->ageGroups = $ageGroups;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTargetGroupId() : ?int
    {
        return $this->targetGroupId;
    }
    /**
     * 
     *
     * @param int|null $targetGroupId
     *
     * @return self
     */
    public function setTargetGroupId(?int $targetGroupId) : self
    {
        $this->initialized['targetGroupId'] = true;
        $this->targetGroupId = $targetGroupId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxMembers() : ?int
    {
        return $this->maxMembers;
    }
    /**
     * 
     *
     * @param int|null $maxMembers
     *
     * @return self
     */
    public function setMaxMembers(?int $maxMembers) : self
    {
        $this->initialized['maxMembers'] = true;
        $this->maxMembers = $maxMembers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGroupTypeId() : int
    {
        return $this->groupTypeId;
    }
    /**
     * 
     *
     * @param int $groupTypeId
     *
     * @return self
     */
    public function setGroupTypeId(int $groupTypeId) : self
    {
        $this->initialized['groupTypeId'] = true;
        $this->groupTypeId = $groupTypeId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getGroupStatusId() : int
    {
        return $this->groupStatusId;
    }
    /**
     * 
     *
     * @param int $groupStatusId
     *
     * @return self
     */
    public function setGroupStatusId(int $groupStatusId) : self
    {
        $this->initialized['groupStatusId'] = true;
        $this->groupStatusId = $groupStatusId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNote() : string
    {
        return $this->note;
    }
    /**
     * 
     *
     * @param string $note
     *
     * @return self
     */
    public function setNote(string $note) : self
    {
        $this->initialized['note'] = true;
        $this->note = $note;
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
}