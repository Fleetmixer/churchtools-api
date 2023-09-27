<?php

namespace ChurchTools\Api2\Endpoint;

class DeleteFiles extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $domainType;
    protected $domainIdentifier;
    /**
     * 
     *
     * @param string $domainType The domain type. Currently supported are 'avatar', 'groupimage', 'logo', 'attatchments', 'html_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'wiki_.?'.
     * @param string $domainIdentifier the domain identifier
     */
    public function __construct(string $domainType, string $domainIdentifier)
    {
        $this->domainType = $domainType;
        $this->domainIdentifier = $domainIdentifier;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{domainType}', '{domainIdentifier}'), array($this->domainType, $this->domainIdentifier), '/files/{domainType}/{domainIdentifier}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('text/plain'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ChurchTools\Api2\Exception\DeleteFilesForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\DeleteFilesForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}