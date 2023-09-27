<?php

namespace ChurchTools\Api2\Model;

class LogsGetResponse200 extends \ArrayObject
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
     * @var Log[]
     */
    protected $data;
    /**
     * 
     *
     * @var LogsGetResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return Log[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Log[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return LogsGetResponse200Meta
     */
    public function getMeta() : LogsGetResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param LogsGetResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(LogsGetResponse200Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}