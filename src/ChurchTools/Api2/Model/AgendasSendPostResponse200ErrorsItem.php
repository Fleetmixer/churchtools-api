<?php

namespace ChurchTools\Api2\Model;

class AgendasSendPostResponse200ErrorsItem extends \ArrayObject
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
    protected $titel;
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
     * @var string
     */
    protected $apiUrl;
    /**
     * 
     *
     * @var string
     */
    protected $frontendUrl;
    /**
     * 
     *
     * @var string
     */
    protected $imageUrl;
    /**
     * 
     *
     * @var AgendasSendPostResponse200ErrorsItemDomainAttributes
     */
    protected $domainAttributes;
    /**
     * 
     *
     * @return string
     */
    public function getTitel() : string
    {
        return $this->titel;
    }
    /**
     * 
     *
     * @param string $titel
     *
     * @return self
     */
    public function setTitel(string $titel) : self
    {
        $this->initialized['titel'] = true;
        $this->titel = $titel;
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
    /**
     * 
     *
     * @return string
     */
    public function getApiUrl() : string
    {
        return $this->apiUrl;
    }
    /**
     * 
     *
     * @param string $apiUrl
     *
     * @return self
     */
    public function setApiUrl(string $apiUrl) : self
    {
        $this->initialized['apiUrl'] = true;
        $this->apiUrl = $apiUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFrontendUrl() : string
    {
        return $this->frontendUrl;
    }
    /**
     * 
     *
     * @param string $frontendUrl
     *
     * @return self
     */
    public function setFrontendUrl(string $frontendUrl) : self
    {
        $this->initialized['frontendUrl'] = true;
        $this->frontendUrl = $frontendUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImageUrl() : string
    {
        return $this->imageUrl;
    }
    /**
     * 
     *
     * @param string $imageUrl
     *
     * @return self
     */
    public function setImageUrl(string $imageUrl) : self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     * 
     *
     * @return AgendasSendPostResponse200ErrorsItemDomainAttributes
     */
    public function getDomainAttributes() : AgendasSendPostResponse200ErrorsItemDomainAttributes
    {
        return $this->domainAttributes;
    }
    /**
     * 
     *
     * @param AgendasSendPostResponse200ErrorsItemDomainAttributes $domainAttributes
     *
     * @return self
     */
    public function setDomainAttributes(AgendasSendPostResponse200ErrorsItemDomainAttributes $domainAttributes) : self
    {
        $this->initialized['domainAttributes'] = true;
        $this->domainAttributes = $domainAttributes;
        return $this;
    }
}