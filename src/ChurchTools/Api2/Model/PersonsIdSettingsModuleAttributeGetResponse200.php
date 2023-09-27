<?php

namespace ChurchTools\Api2\Model;

class PersonsIdSettingsModuleAttributeGetResponse200 extends \ArrayObject
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
     * Piece of meta information about a person, like is this person using two factor authentication or does she want service remind mails.
     *
     * @var PersonSetting
     */
    protected $data;
    /**
     * Piece of meta information about a person, like is this person using two factor authentication or does she want service remind mails.
     *
     * @return PersonSetting
     */
    public function getData() : PersonSetting
    {
        return $this->data;
    }
    /**
     * Piece of meta information about a person, like is this person using two factor authentication or does she want service remind mails.
     *
     * @param PersonSetting $data
     *
     * @return self
     */
    public function setData(PersonSetting $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}