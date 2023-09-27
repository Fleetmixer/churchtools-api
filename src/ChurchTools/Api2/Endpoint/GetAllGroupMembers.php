<?php

namespace ChurchTools\Api2\Endpoint;

class GetAllGroupMembers extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint returns an array with all group members of one group.
     *
     * @param int $id ID of group
     * @param array $queryParameters {
     *     @var int $page Page number to show page in pagenation. If empty, start at first page.
     *     @var int $limit Number of results per page.
     * }
     */
    public function __construct(int $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/groups/{id}/members');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('page', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1, 'limit' => 10));
        $optionsResolver->addAllowedTypes('page', array('int'));
        $optionsResolver->addAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\GetAllGroupMembersUnauthorizedException
     * @throws \ChurchTools\Api2\Exception\GetAllGroupMembersForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\GroupsIdMembersGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\GroupsIdMembersGetResponse200', 'json');
        }
        if (401 === $status) {
            throw new \ChurchTools\Api2\Exception\GetAllGroupMembersUnauthorizedException($response);
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetAllGroupMembersForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}