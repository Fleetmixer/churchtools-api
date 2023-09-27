<?php

namespace ChurchTools\Api2\Model;

class FilesDomainTypeDomainIdentifierPostResponse200 extends \ArrayObject
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
     * @var File[]
     */
    protected $data;
    /**
     * 
     *
     * @var FilesDomainTypeDomainIdentifierPostResponse200Meta
     */
    protected $meta;
    /**
     * 
     *
     * @return File[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param File[] $data
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
     * @return FilesDomainTypeDomainIdentifierPostResponse200Meta
     */
    public function getMeta() : FilesDomainTypeDomainIdentifierPostResponse200Meta
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param FilesDomainTypeDomainIdentifierPostResponse200Meta $meta
     *
     * @return self
     */
    public function setMeta(FilesDomainTypeDomainIdentifierPostResponse200Meta $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}