<?php

namespace ChurchTools\Api2\Model;

class EventsEventIdAgendaGetResponse200 extends \ArrayObject
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
     * @var Agenda
     */
    protected $data;
    /**
     * 
     *
     * @return Agenda
     */
    public function getData() : Agenda
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Agenda $data
     *
     * @return self
     */
    public function setData(Agenda $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}