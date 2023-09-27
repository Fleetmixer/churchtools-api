<?php

namespace ChurchTools\Api2\Endpoint;

class PatchPerson extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $id;
    protected $accept;
    /**
     * Endpoint to update a person in ChurchTools. Generally, you can provide any information to save, but be aware that you can only save information for fields you have write access to. Beware, that not all fields which are listed in the Person schema can be updated. E.g. `imageUrl` or `familyUrl`.
     *
     * @param string $id ID or GUID of person
     * @param \stdClass $requestBody 
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, \stdClass $requestBody, array $accept = array())
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/persons/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \stdClass) {
            return array(array('Content-Type' => array('application/json')), json_encode($this->body));
        }
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
     * @throws \ChurchTools\Api2\Exception\PatchPersonBadRequestException
     * @throws \ChurchTools\Api2\Exception\PatchPersonForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdPatchResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsIdPatchResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ChurchTools\Api2\Exception\PatchPersonBadRequestException($serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsIdPatchResponse400', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\PatchPersonForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}