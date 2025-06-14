<?php

namespace ChurchTools\Api2\Model;

class AppointmentTemplate extends \ArrayObject
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
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $comment;
    /**
     * 
     *
     * @var string
     */
    protected $startTime;
    /**
     * Duration in seconds
     *
     * @var int
     */
    protected $duration;
    /**
     * 
     *
     * @var bool
     */
    protected $allDay;
    /**
     * 
     *
     * @var string
     */
    protected $note;
    /**
     * 
     *
     * @var bool
     */
    protected $isInternal;
    /**
     * 
     *
     * @var int
     */
    protected $categoryId;
    /**
     * 
     *
     * @var int
     */
    protected $repeatId;
    /**
     * 
     *
     * @var int
     */
    protected $repeatFrequence;
    /**
     * 
     *
     * @var int
     */
    protected $repeatOptionId;
    /**
     * 
     *
     * @var int
     */
    protected $repeatDuration;
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
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
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
     * @return string
     */
    public function getStartTime() : string
    {
        return $this->startTime;
    }
    /**
     * 
     *
     * @param string $startTime
     *
     * @return self
     */
    public function setStartTime(string $startTime) : self
    {
        $this->initialized['startTime'] = true;
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Duration in seconds
     *
     * @return int
     */
    public function getDuration() : int
    {
        return $this->duration;
    }
    /**
     * Duration in seconds
     *
     * @param int $duration
     *
     * @return self
     */
    public function setDuration(int $duration) : self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAllDay() : bool
    {
        return $this->allDay;
    }
    /**
     * 
     *
     * @param bool $allDay
     *
     * @return self
     */
    public function setAllDay(bool $allDay) : self
    {
        $this->initialized['allDay'] = true;
        $this->allDay = $allDay;
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
     * @return bool
     */
    public function getIsInternal() : bool
    {
        return $this->isInternal;
    }
    /**
     * 
     *
     * @param bool $isInternal
     *
     * @return self
     */
    public function setIsInternal(bool $isInternal) : self
    {
        $this->initialized['isInternal'] = true;
        $this->isInternal = $isInternal;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCategoryId() : int
    {
        return $this->categoryId;
    }
    /**
     * 
     *
     * @param int $categoryId
     *
     * @return self
     */
    public function setCategoryId(int $categoryId) : self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRepeatId() : int
    {
        return $this->repeatId;
    }
    /**
     * 
     *
     * @param int $repeatId
     *
     * @return self
     */
    public function setRepeatId(int $repeatId) : self
    {
        $this->initialized['repeatId'] = true;
        $this->repeatId = $repeatId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRepeatFrequence() : int
    {
        return $this->repeatFrequence;
    }
    /**
     * 
     *
     * @param int $repeatFrequence
     *
     * @return self
     */
    public function setRepeatFrequence(int $repeatFrequence) : self
    {
        $this->initialized['repeatFrequence'] = true;
        $this->repeatFrequence = $repeatFrequence;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRepeatOptionId() : int
    {
        return $this->repeatOptionId;
    }
    /**
     * 
     *
     * @param int $repeatOptionId
     *
     * @return self
     */
    public function setRepeatOptionId(int $repeatOptionId) : self
    {
        $this->initialized['repeatOptionId'] = true;
        $this->repeatOptionId = $repeatOptionId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRepeatDuration() : int
    {
        return $this->repeatDuration;
    }
    /**
     * 
     *
     * @param int $repeatDuration
     *
     * @return self
     */
    public function setRepeatDuration(int $repeatDuration) : self
    {
        $this->initialized['repeatDuration'] = true;
        $this->repeatDuration = $repeatDuration;
        return $this;
    }
}