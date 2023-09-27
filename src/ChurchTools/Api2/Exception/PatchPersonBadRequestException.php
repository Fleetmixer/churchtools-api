<?php

namespace ChurchTools\Api2\Exception;

class PatchPersonBadRequestException extends BadRequestException
{
    /**
     * @var \ChurchTools\Api2\Model\PersonsIdPatchResponse400
     */
    private $personsIdPatchResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\ChurchTools\Api2\Model\PersonsIdPatchResponse400 $personsIdPatchResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->personsIdPatchResponse400 = $personsIdPatchResponse400;
        $this->response = $response;
    }
    public function getPersonsIdPatchResponse400() : \ChurchTools\Api2\Model\PersonsIdPatchResponse400
    {
        return $this->personsIdPatchResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}