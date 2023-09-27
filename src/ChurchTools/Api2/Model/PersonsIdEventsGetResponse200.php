<?php

namespace ChurchTools\Api2\Model;

class PersonsIdEventsGetResponse200 extends \ArrayObject
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
     * @var Event
     */
    protected $data;
    /**
     * 
     *
     * @return Event
     */
    public function getData() : Event
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Event $data
     *
     * @return self
     */
    public function setData(Event $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}