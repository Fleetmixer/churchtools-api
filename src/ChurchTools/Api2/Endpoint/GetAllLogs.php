<?php

namespace ChurchTools\Api2\Endpoint;

class GetAllLogs extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * The response is a collection of all log messages you may see and is limited to a specific number of messages. You can use the `page` parameter to browse the list of log messages. The logs are ordered by date.
     *
     * @param array $queryParameters {
     *     @var string $message Filter by text
     *     @var array $levels Filter by log level
     *     @var string $before Filter log messages before that date. (Format: YYYY-MM-DD\Thh:mm:ssZ)
     *     @var string $after Filter log messages after that date. (Format: YYYY-MM-DD\Thh:mm:ssZ)
     *     @var int $person_id Filter by person
     *     @var int $page Page number to show page in pagenation. If empty, start at first page.
     *     @var int $limit Number of results per page.
     * }
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(array $queryParameters = array(), array $accept = array())
    {
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/logs';
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
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('message', 'levels', 'before', 'after', 'person_id', 'page', 'limit'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1, 'limit' => 10));
        $optionsResolver->addAllowedTypes('message', array('string'));
        $optionsResolver->addAllowedTypes('levels', array('array'));
        $optionsResolver->addAllowedTypes('before', array('string'));
        $optionsResolver->addAllowedTypes('after', array('string'));
        $optionsResolver->addAllowedTypes('person_id', array('int'));
        $optionsResolver->addAllowedTypes('page', array('int'));
        $optionsResolver->addAllowedTypes('limit', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\GetAllLogsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\LogsGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\LogsGetResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetAllLogsForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}