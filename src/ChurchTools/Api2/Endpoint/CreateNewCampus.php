<?php

namespace ChurchTools\Api2\Endpoint;

class CreateNewCampus extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \ChurchTools\Api2\Model\CampusesPostBody $requestBody 
     */
    public function __construct(\ChurchTools\Api2\Model\CampusesPostBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/campuses';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ChurchTools\Api2\Model\CampusesPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\CreateNewCampusBadRequestException
     * @throws \ChurchTools\Api2\Exception\CreateNewCampusPaymentRequiredException
     *
     * @return null|\ChurchTools\Api2\Model\CampusesPostResponse201
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\CampusesPostResponse201', 'json');
        }
        if (400 === $status) {
            throw new \ChurchTools\Api2\Exception\CreateNewCampusBadRequestException($response);
        }
        if (402 === $status) {
            throw new \ChurchTools\Api2\Exception\CreateNewCampusPaymentRequiredException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}