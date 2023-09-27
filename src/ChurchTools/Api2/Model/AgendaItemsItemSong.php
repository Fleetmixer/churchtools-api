<?php

namespace ChurchTools\Api2\Model;

class AgendaItemsItemSong extends \ArrayObject
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
    protected $songId;
    /**
     * 
     *
     * @var int
     */
    protected $arrangementId;
    /**
     * 
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string
     */
    protected $arrangement;
    /**
     * 
     *
     * @var string
     */
    protected $category;
    /**
     * 
     *
     * @var string
     */
    protected $key;
    /**
     * 
     *
     * @var string
     */
    protected $bpm;
    /**
     * 
     *
     * @var string
     */
    protected $defaultArrangement;
    /**
     * 
     *
     * @return int
     */
    public function getSongId() : int
    {
        return $this->songId;
    }
    /**
     * 
     *
     * @param int $songId
     *
     * @return self
     */
    public function setSongId(int $songId) : self
    {
        $this->initialized['songId'] = true;
        $this->songId = $songId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getArrangementId() : int
    {
        return $this->arrangementId;
    }
    /**
     * 
     *
     * @param int $arrangementId
     *
     * @return self
     */
    public function setArrangementId(int $arrangementId) : self
    {
        $this->initialized['arrangementId'] = true;
        $this->arrangementId = $arrangementId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getArrangement() : string
    {
        return $this->arrangement;
    }
    /**
     * 
     *
     * @param string $arrangement
     *
     * @return self
     */
    public function setArrangement(string $arrangement) : self
    {
        $this->initialized['arrangement'] = true;
        $this->arrangement = $arrangement;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBpm() : string
    {
        return $this->bpm;
    }
    /**
     * 
     *
     * @param string $bpm
     *
     * @return self
     */
    public function setBpm(string $bpm) : self
    {
        $this->initialized['bpm'] = true;
        $this->bpm = $bpm;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultArrangement() : string
    {
        return $this->defaultArrangement;
    }
    /**
     * 
     *
     * @param string $defaultArrangement
     *
     * @return self
     */
    public function setDefaultArrangement(string $defaultArrangement) : self
    {
        $this->initialized['defaultArrangement'] = true;
        $this->defaultArrangement = $defaultArrangement;
        return $this;
    }
}