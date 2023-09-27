<?php

namespace ChurchTools\Api2\Model;

class PersonSetting extends \ArrayObject
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
    protected $module;
    /**
     * 
     *
     * @var string
     */
    protected $attribute;
    /**
     * Mixed content. Each setting has its own type.
     *
     * @var mixed
     */
    protected $value;
    /**
     * 
     *
     * @return string
     */
    public function getModule() : string
    {
        return $this->module;
    }
    /**
     * 
     *
     * @param string $module
     *
     * @return self
     */
    public function setModule(string $module) : self
    {
        $this->initialized['module'] = true;
        $this->module = $module;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAttribute() : string
    {
        return $this->attribute;
    }
    /**
     * 
     *
     * @param string $attribute
     *
     * @return self
     */
    public function setAttribute(string $attribute) : self
    {
        $this->initialized['attribute'] = true;
        $this->attribute = $attribute;
        return $this;
    }
    /**
     * Mixed content. Each setting has its own type.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Mixed content. Each setting has its own type.
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}