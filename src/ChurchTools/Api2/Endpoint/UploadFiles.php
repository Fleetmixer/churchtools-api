<?php

namespace ChurchTools\Api2\Endpoint;

class UploadFiles extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $domainType;
    protected $domainIdentifier;
    protected $accept;
    /**
     * 
     *
     * @param string $domainType The domain type. Currently supported are 'avatar', 'groupimage', 'logo', 'attatchments', 'html_template', 'service', 'song_arrangement', 'importtable', 'person', 'familyavatar', 'wiki_.?'.
     * @param string $domainIdentifier the domain identifier
     * @param null|\ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostBody $requestBody 
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $domainType, string $domainIdentifier, ?\ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostBody $requestBody = null, array $accept = array())
    {
        $this->domainType = $domainType;
        $this->domainIdentifier = $domainIdentifier;
        $this->body = $requestBody;
        $this->accept = $accept;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{domainType}', '{domainIdentifier}'), array($this->domainType, $this->domainIdentifier), '/files/{domainType}/{domainIdentifier}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }
            return array(array('Content-Type' => array('multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"'))), $bodyBuilder->build());
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
     * @throws \ChurchTools\Api2\Exception\UploadFilesForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\FilesDomainTypeDomainIdentifierPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\FilesDomainTypeDomainIdentifierPostResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\UploadFilesForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}