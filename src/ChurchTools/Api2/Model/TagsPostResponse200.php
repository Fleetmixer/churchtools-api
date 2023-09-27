<?php

namespace ChurchTools\Api2\Model;

class TagsPostResponse200 extends \ArrayObject
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
     * @var Tag
     */
    protected $data;
    /**
     * 
     *
     * @return Tag
     */
    public function getData() : Tag
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param Tag $data
     *
     * @return self
     */
    public function setData(Tag $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}