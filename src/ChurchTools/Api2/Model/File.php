<?php

namespace ChurchTools\Api2\Model;

class File extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $filename;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $relativeUrl;
    /**
     * The file size in byte
     *
     * @var int
     */
    protected $size;
    /**
     * 
     *
     * @var string
     */
    protected $domainType;
    /**
     * 
     *
     * @var string
     */
    protected $domainIdentifier;
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
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFilename() : string
    {
        return $this->filename;
    }
    /**
     * 
     *
     * @param string $filename
     *
     * @return self
     */
    public function setFilename(string $filename) : self
    {
        $this->initialized['filename'] = true;
        $this->filename = $filename;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRelativeUrl() : string
    {
        return $this->relativeUrl;
    }
    /**
     * 
     *
     * @param string $relativeUrl
     *
     * @return self
     */
    public function setRelativeUrl(string $relativeUrl) : self
    {
        $this->initialized['relativeUrl'] = true;
        $this->relativeUrl = $relativeUrl;
        return $this;
    }
    /**
     * The file size in byte
     *
     * @return int
     */
    public function getSize() : int
    {
        return $this->size;
    }
    /**
     * The file size in byte
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomainType() : string
    {
        return $this->domainType;
    }
    /**
     * 
     *
     * @param string $domainType
     *
     * @return self
     */
    public function setDomainType(string $domainType) : self
    {
        $this->initialized['domainType'] = true;
        $this->domainType = $domainType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomainIdentifier() : string
    {
        return $this->domainIdentifier;
    }
    /**
     * 
     *
     * @param string $domainIdentifier
     *
     * @return self
     */
    public function setDomainIdentifier(string $domainIdentifier) : self
    {
        $this->initialized['domainIdentifier'] = true;
        $this->domainIdentifier = $domainIdentifier;
        return $this;
    }
}