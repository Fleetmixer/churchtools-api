<?php

namespace ChurchTools\Api2\Endpoint;

class GetPersonModuleSettings extends \ChurchTools\Api2\Runtime\Client\BaseEndpoint implements \ChurchTools\Api2\Runtime\Client\Endpoint
{
    protected $id;
    protected $module;
    protected $accept;
    /**
     * Person settings are grouped per module. This endpoint returns an array of all user settings for a person of this module.
     *
     * @param string $id ID or GUID of person
     * @param string $module Module name like `churchdb` or `churchservice`
     * @param array $accept Accept content header application/json|text/plain
     */
    public function __construct(string $id, string $module, array $accept = array())
    {
        $this->id = $id;
        $this->module = $module;
        $this->accept = $accept;
    }
    use \ChurchTools\Api2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{module}'), array($this->id, $this->module), '/persons/{id}/settings/{module}');
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
     * @throws \ChurchTools\Api2\Exception\GetPersonModuleSettingsForbiddenException
     *
     * @return null|\ChurchTools\Api2\Model\PersonsIdSettingsModuleGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ChurchTools\\Api2\\Model\\PersonsIdSettingsModuleGetResponse200', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
            throw new \ChurchTools\Api2\Exception\GetPersonModuleSettingsForbiddenException($response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('login_token');
    }
}