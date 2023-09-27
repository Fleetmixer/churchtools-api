<?php

namespace ChurchTools\Api2\Endpoint;

class GetMasterdataPersonRoleByRoleId extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $roleId;
    /**
     * 
     *
     * @param int $roleId ID of group type role
     */
    public function __construct(int $roleId)
    {
        $this->roleId = $roleId;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{roleId}'), array($this->roleId), '/masterdata/person/roles/{roleId}');
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
     * @throws \ChurchTools\Api2\Exception\GetMasterdataPersonRoleByRoleIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetMasterdataPersonRoleByRoleIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\MasterdataPersonRolesRoleIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\MasterdataPersonRolesRoleIdGetResponse200', 'json');
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetMasterdataPersonRoleByRoleIdForbiddenException($response);
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\GetMasterdataPersonRoleByRoleIdNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}