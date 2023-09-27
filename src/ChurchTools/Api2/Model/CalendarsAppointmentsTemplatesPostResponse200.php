<?php

namespace ChurchTools\Api2\Model;

class CalendarsAppointmentsTemplatesPostResponse200 extends \ArrayObject
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
     * @var AppointmentTemplate[]
     */
    protected $data;
    /**
     * 
     *
     * @return AppointmentTemplate[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param AppointmentTemplate[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}