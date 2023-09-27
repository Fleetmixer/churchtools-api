<?php

namespace ChurchTools\Api2\Exception;

class CreateNewCampusPaymentRequiredException extends PaymentRequiredException
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Psr\Http\Message\ResponseInterface $response = null)
    {
        parent::__construct('License limit reached. Update your license to perform this action.');
        $this->response = $response;
    }
    public function getResponse() : ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}