<?php

namespace ChurchTools\Api2\Endpoint;

class GetPersonTags extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id ID or GUID of person
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/persons/{id}/tags');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\GetPersonTagsUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetPersonTagsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdTagsGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsIdTagsGetResponse200', 'json');
        }
        if (401 === $status) {
            throw new \ChurchTools\Api2\Exception\GetPersonTagsUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetPersonTagsForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}