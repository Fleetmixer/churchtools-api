<?php

namespace ChurchTools\Api2\Endpoint;

class GetPersonById extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * Each person as a unique numeric ID in ChurchTools. This ID is used all over in ChurchTools and in the API.
     *
     * @param string $id ID or GUID of person
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, array $accept = array())
    {
        $this->id = $id;
        $this->accept = $accept;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/persons/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('application/json', 'text/plain'));
        }
        return $this->accept;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\GetPersonByIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetPersonByIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsIdGetResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetPersonByIdForbiddenException($response);
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\GetPersonByIdNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}