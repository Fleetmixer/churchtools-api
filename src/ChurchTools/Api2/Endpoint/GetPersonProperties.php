<?php

namespace ChurchTools\Api2\Endpoint;

class GetPersonProperties extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|\ChurchTools\Api2\Model\PersonsPropertiesPostBody $requestBody 
     */
    public function __construct(?\ChurchTools\Api2\Model\PersonsPropertiesPostBody $requestBody = null)
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
        return '/persons/properties';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ChurchTools\Api2\Model\PersonsPropertiesPostBody) {
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
     * @throws \ChurchTools\Api2\Exception\GetPersonPropertiesUnauthorizedException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsPropertiesPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsPropertiesPostResponse200', 'json');
        }
        if (401 === $status) {
            throw new \ChurchTools\Api2\Exception\GetPersonPropertiesUnauthorizedException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}