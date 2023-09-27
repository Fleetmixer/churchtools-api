<?php

namespace ChurchTools\Api2\Endpoint;

class CreatePerson extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $accept;
    /**
     * Endpoint to save a new person in ChurchTools. Generally, you can provide any information to save, but be aware that you can only save information for fields you have write access to. If the request fails because a duplicate is found (person with same name) use the `force` flag to create this person even if a duplicate is found.
     *
     * @param \ChurchTools\Api2\Model\PersonsPostBody $requestBody 
     * @param array $queryParameters {
     *     @var bool $force Force the action, which would otherwise fail.
     * }
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(\ChurchTools\Api2\Model\PersonsPostBody $requestBody, array $queryParameters = array(), array $accept = array())
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->accept = $accept;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/persons';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ChurchTools\Api2\Model\PersonsPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
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
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('force'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('force', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\CreatePersonBadRequestException
     * @throws \ChurchTools\Api2\Exception\CreatePersonPaymentRequiredException
     * @throws \ChurchTools\Api2\Exception\CreatePersonForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ChurchTools\Api2\Exception\CreatePersonBadRequestException($serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsPostResponse400', 'json'), $response);
        }
        if (401 === $status) {
        }
        if (402 === $status) {
            throw new \ChurchTools\Api2\Exception\CreatePersonPaymentRequiredException($response);
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\CreatePersonForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}