<?php

namespace ChurchTools\Api2\Model;

class AgendaItemsItem extends \ArrayObject
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
     * @var int
     */
    protected $position;
    /**
     * 
     *
     * @var string
     */
    protected $type;
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
    protected $note;
    /**
     * Duration of agenda item in seconds.
     *
     * @var int
     */
    protected $duration;
    /**
     * The start time of a position is dynamically calculated based on previous items and the start time of the event.
     *
     * @var \DateTime
     */
    protected $start;
    /**
     * 
     *
     * @var bool
     */
    protected $isBeforeEvent;
    /**
     * 
     *
     * @var AgendaItemsItemResponsible
     */
    protected $responsible;
    /**
     * Array of notes per service group. You will only see the service groups, you are allowed to see.
     *
     * @var AgendaItemsItemServiceGroupNotesItem[]
     */
    protected $serviceGroupNotes;
    /**
     * If the type is `song` the song object is added to this item. `normal` and `header` items do not include this object.
     *
     * @var AgendaItemsItemSong
     */
    protected $song;
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
     * @return int
     */
    public function getPosition() : int
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
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
     * Duration of agenda item in seconds.
     *
     * @return int
     */
    public function getDuration() : int
    {
        return $this->duration;
    }
    /**
     * Duration of agenda item in seconds.
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
     * The start time of a position is dynamically calculated based on previous items and the start time of the event.
     *
     * @return \DateTime
     */
    public function getStart() : \DateTime
    {
        return $this->start;
    }
    /**
     * The start time of a position is dynamically calculated based on previous items and the start time of the event.
     *
     * @param \DateTime $start
     *
     * @return self
     */
    public function setStart(\DateTime $start) : self
    {
        $this->initialized['start'] = true;
        $this->start = $start;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsBeforeEvent() : bool
    {
        return $this->isBeforeEvent;
    }
    /**
     * 
     *
     * @param bool $isBeforeEvent
     *
     * @return self
     */
    public function setIsBeforeEvent(bool $isBeforeEvent) : self
    {
        $this->initialized['isBeforeEvent'] = true;
        $this->isBeforeEvent = $isBeforeEvent;
        return $this;
    }
    /**
     * 
     *
     * @return AgendaItemsItemResponsible
     */
    public function getResponsible() : AgendaItemsItemResponsible
    {
        return $this->responsible;
    }
    /**
     * 
     *
     * @param AgendaItemsItemResponsible $responsible
     *
     * @return self
     */
    public function setResponsible(AgendaItemsItemResponsible $responsible) : self
    {
        $this->initialized['responsible'] = true;
        $this->responsible = $responsible;
        return $this;
    }
    /**
     * Array of notes per service group. You will only see the service groups, you are allowed to see.
     *
     * @return AgendaItemsItemServiceGroupNotesItem[]
     */
    public function getServiceGroupNotes() : array
    {
        return $this->serviceGroupNotes;
    }
    /**
     * Array of notes per service group. You will only see the service groups, you are allowed to see.
     *
     * @param AgendaItemsItemServiceGroupNotesItem[] $serviceGroupNotes
     *
     * @return self
     */
    public function setServiceGroupNotes(array $serviceGroupNotes) : self
    {
        $this->initialized['serviceGroupNotes'] = true;
        $this->serviceGroupNotes = $serviceGroupNotes;
        return $this;
    }
    /**
     * If the type is `song` the song object is added to this item. `normal` and `header` items do not include this object.
     *
     * @return AgendaItemsItemSong
     */
    public function getSong() : AgendaItemsItemSong
    {
        return $this->song;
    }
    /**
     * If the type is `song` the song object is added to this item. `normal` and `header` items do not include this object.
     *
     * @param AgendaItemsItemSong $song
     *
     * @return self
     */
    public function setSong(AgendaItemsItemSong $song) : self
    {
        $this->initialized['song'] = true;
        $this->song = $song;
        return $this;
    }
}