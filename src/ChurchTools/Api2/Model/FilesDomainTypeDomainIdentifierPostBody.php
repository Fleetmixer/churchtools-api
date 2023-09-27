<?php

namespace ChurchTools\Api2\Model;

class FilesDomainTypeDomainIdentifierPostBody extends \ArrayObject
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
     * @var string[]
     */
    protected $files;
    /**
     * 
     *
     * @return string[]
     */
    public function getFiles() : array
    {
        return $this->files;
    }
    /**
     * 
     *
     * @param string[] $files
     *
     * @return self
     */
    public function setFiles(array $files) : self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
}