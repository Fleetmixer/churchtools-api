<?php

namespace ChurchTools\Api2\Model;

class InfoGetResponse200 extends \ArrayObject
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
     * @var string
     */
    protected $build;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @return string
     */
    public function getBuild() : string
    {
        return $this->build;
    }
    /**
     * 
     *
     * @param string $build
     *
     * @return self
     */
    public function setBuild(string $build) : self
    {
        $this->initialized['build'] = true;
        $this->build = $build;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}