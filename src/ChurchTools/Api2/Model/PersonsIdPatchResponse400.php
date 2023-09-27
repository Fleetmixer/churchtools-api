<?php

namespace ChurchTools\Api2\Model;

class PersonsIdPatchResponse400 extends \ArrayObject
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
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $translatedMessage;
    /**
     * 
     *
     * @var string
     */
    protected $messageKey;
    /**
     * 
     *
     * @var string[]
     */
    protected $args;
    /**
     * 
     *
     * @var string[]
     */
    protected $errors;
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTranslatedMessage() : string
    {
        return $this->translatedMessage;
    }
    /**
     * 
     *
     * @param string $translatedMessage
     *
     * @return self
     */
    public function setTranslatedMessage(string $translatedMessage) : self
    {
        $this->initialized['translatedMessage'] = true;
        $this->translatedMessage = $translatedMessage;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessageKey() : string
    {
        return $this->messageKey;
    }
    /**
     * 
     *
     * @param string $messageKey
     *
     * @return self
     */
    public function setMessageKey(string $messageKey) : self
    {
        $this->initialized['messageKey'] = true;
        $this->messageKey = $messageKey;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getArgs() : array
    {
        return $this->args;
    }
    /**
     * 
     *
     * @param string[] $args
     *
     * @return self
     */
    public function setArgs(array $args) : self
    {
        $this->initialized['args'] = true;
        $this->args = $args;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param string[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}