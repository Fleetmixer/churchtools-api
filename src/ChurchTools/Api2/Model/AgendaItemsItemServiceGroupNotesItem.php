<?php

namespace ChurchTools\Api2\Model;

class AgendaItemsItemServiceGroupNotesItem extends \ArrayObject
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
    protected $serviceGroupId;
    /**
     * 
     *
     * @var string
     */
    protected $note;
    /**
     * 
     *
     * @return int
     */
    public function getServiceGroupId() : int
    {
        return $this->serviceGroupId;
    }
    /**
     * 
     *
     * @param int $serviceGroupId
     *
     * @return self
     */
    public function setServiceGroupId(int $serviceGroupId) : self
    {
        $this->initialized['serviceGroupId'] = true;
        $this->serviceGroupId = $serviceGroupId;
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
}