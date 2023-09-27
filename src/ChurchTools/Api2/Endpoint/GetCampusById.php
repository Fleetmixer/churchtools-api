<?php

namespace ChurchTools\Api2\Endpoint;

class GetCampusById extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param int $id ID of campus
     */
    public function __construct(int $id)
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
        return str_replace(array('{id}'), array($this->id), '/campuses/{id}');
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
     * @throws \ChurchTools\Api2\Exception\GetCampusByIdForbiddenException
     * @throws \ChurchTools\Api2\Exception\GetCampusByIdNotFoundException
     *
     * @return null|\ChurchTools\Api2\Model\CampusesIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\CampusesIdGetResponse200', 'json');
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetCampusByIdForbiddenException($response);
        }
        if (404 === $status) {
            throw new \ChurchTools\Api2\Exception\GetCampusByIdNotFoundException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}