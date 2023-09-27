<?php

namespace ChurchTools\Api2\Exception;

class CreatePersonBadRequestException extends BadRequestException
{
    /**
     * @var \ChurchTools\Api2\Model\PersonsPostResponse400
     */
    private $personsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\ChurchTools\Api2\Model\PersonsPostResponse400 $personsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request / Duplicate Person');
        $this->personsPostResponse400 = $personsPostResponse400;
        $this->response = $response;
    }
    public function getPersonsPostResponse400() : \ChurchTools\Api2\Model\PersonsPostResponse400
    {
        return $this->personsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}