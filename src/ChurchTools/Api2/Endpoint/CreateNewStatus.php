<?php

namespace ChurchTools\Api2\Endpoint;

class CreateNewStatus extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param \ChurchTools\Api2\Model\StatusesPostBody|\stdClass $requestBody 
     */
    public function __construct($requestBody)
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
        return '/statuses';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ChurchTools\Api2\Model\StatusesPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        if ($this->body instanceof \stdClass) {
            return array(array('Content-Type' => array('application/x-www-form-urlencoded')), http_build_query($serializer->normalize($this->body, 'json')));
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
     * @throws \ChurchTools\Api2\Exception\CreateNewStatusBadRequestException
     *
     * @return null|\ChurchTools\Api2\Model\StatusesPostResponse201
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\StatusesPostResponse201', 'json');
        }
        if (400 === $status) {
            throw new \ChurchTools\Api2\Exception\CreateNewStatusBadRequestException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}