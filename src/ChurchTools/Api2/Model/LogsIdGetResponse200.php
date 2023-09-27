<?php

namespace ChurchTools\Api2\Model;

class LogsIdGetResponse200 extends \ArrayObject
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
     * ChurchTools writes log messages for many events and changes. This can be an update for a person or the deletion of an event. You can use the log to debug your system and follow error messages. This is a versitile tool.
     *
     * @var Log
     */
    protected $data;
    /**
     * ChurchTools writes log messages for many events and changes. This can be an update for a person or the deletion of an event. You can use the log to debug your system and follow error messages. This is a versitile tool.
     *
     * @return Log
     */
    public function getData() : Log
    {
        return $this->data;
    }
    /**
     * ChurchTools writes log messages for many events and changes. This can be an update for a person or the deletion of an event. You can use the log to debug your system and follow error messages. This is a versitile tool.
     *
     * @param Log $data
     *
     * @return self
     */
    public function setData(Log $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}